/**
 * Veda Webtech — Admin Panel JavaScript
 */
$(function () {

    // ── Sidebar Toggle (Mobile) ──────────────────────────────
    const $sidebar = $('#sidebar');
    const $overlay = $('#sidebarOverlay');

    $('#openSidebar').on('click', function () {
        $sidebar.removeClass('-translate-x-full');
        $overlay.removeClass('hidden');
    });

    function closeSidebar() {
        $sidebar.addClass('-translate-x-full');
        $overlay.addClass('hidden');
    }
    $('#closeSidebar, #sidebarOverlay').on('click', closeSidebar);

    // ── User Menu Toggle ─────────────────────────────────────
    $('#userMenuTrigger').on('click', function (e) {
        e.stopPropagation();
        $('#userMenu').toggleClass('hidden');
    });
    $(document).on('click', function () {
        $('#userMenu').addClass('hidden');
    });

    // ── Theme Toggle ─────────────────────────────────────────
    $('#themeToggle').on('click', function () {
        const html = document.documentElement;
        html.classList.toggle('dark');
        localStorage.setItem('admin_theme', html.classList.contains('dark') ? 'dark' : 'light');
    });

    // ── Flash Message Dismiss ────────────────────────────────
    $(document).on('click', '.flash-dismiss', function () {
        $(this).closest('.flash-message').fadeOut(300, function () { $(this).remove(); });
    });
    // Auto-dismiss after 5 seconds
    setTimeout(function () {
        $('.flash-message').fadeOut(400, function () { $(this).remove(); });
    }, 5000);

    // ── Delete Confirmation Modal ────────────────────────────
    window.confirmDelete = function (url, itemName) {
        const modal = $(`
            <div class="modal-overlay" id="deleteModal">
                <div class="modal-box">
                    <div class="text-center">
                        <div class="w-16 h-16 rounded-2xl bg-red-100 dark:bg-red-500/10 flex items-center justify-center mx-auto mb-5">
                            <i class="fa-solid fa-trash-can text-2xl text-red-500"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Delete ${itemName}?</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-8">This action cannot be undone. Are you sure you want to permanently delete this item?</p>
                        <div class="flex items-center gap-3">
                            <button class="btn btn-secondary flex-1" onclick="closeDeleteModal()">Cancel</button>
                            <a href="${url}" class="btn btn-danger flex-1"><i class="fa-solid fa-trash-can"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        `);
        $('body').append(modal);
        requestAnimationFrame(() => modal.addClass('show'));
    };

    window.closeDeleteModal = function () {
        const modal = $('#deleteModal');
        modal.removeClass('show');
        setTimeout(() => modal.remove(), 300);
    };

    // Close modal on overlay click
    $(document).on('click', '.modal-overlay', function (e) {
        if (e.target === this) closeDeleteModal();
    });

    // ── Auto-generate Slug ───────────────────────────────────
    $(document).on('input', '[data-slug-source]', function () {
        const target = $(this).data('slug-source');
        const slug = $(this).val()
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/[\s-]+/g, '-')
            .replace(/^-+|-+$/g, '');
        $(target).val(slug);
    });

    // ── Status Toggle via AJAX ───────────────────────────────
    $(document).on('change', '.status-toggle', function () {
        const $toggle = $(this);
        const url = $toggle.data('url');
        const token = $toggle.data('token');

        $.post(url, { _csrf_token: token }, function (response) {
            // Success — toggle visual state already handled by checkbox
        }).fail(function () {
            // Revert on failure
            $toggle.prop('checked', !$toggle.prop('checked'));
            alert('Failed to update status. Please try again.');
        });
    });

    // ── Image Preview ────────────────────────────────────────
    $(document).on('change', '.image-upload', function () {
        const input = this;
        const previewId = $(this).data('preview');
        const placeholderId = $(this).data('placeholder');
        if (input.files && input.files[0]) {
            const file = input.files[0];

            // Validate
            if (!file.type.startsWith('image/')) {
                alert('Please select an image file.');
                $(this).val('');
                return;
            }
            if (file.size > 1048576) {
                alert('Image must be less than 1MB.');
                $(this).val('');
                return;
            }

            const reader = new FileReader();
            reader.onload = function (e) {
                $(previewId).attr('src', e.target.result).removeClass('hidden');
                if (placeholderId) {
                    $(placeholderId).addClass('hidden');
                }
                $(previewId).closest('.image-preview-wrapper').removeClass('hidden');
            };
            reader.readAsDataURL(file);
        }
    });

    // ── Animate elements on page load ────────────────────────
    $('.animate-in').each(function (i) {
        $(this).css('animation-delay', (i * 0.08) + 's');
    });

    // ── Table search ─────────────────────────────────────────
    $(document).on('input', '.table-search', function () {
        const query = $(this).val().toLowerCase();
        const tableId = $(this).data('table');
        $(`#${tableId} tbody tr`).each(function () {
            const text = $(this).text().toLowerCase();
            $(this).toggle(text.includes(query));
        });
    });

    // ── Select All Checkbox ──────────────────────────────────
    $(document).on('change', '.select-all', function () {
        const checked = $(this).prop('checked');
        $(this).closest('table').find('.select-item').prop('checked', checked);
    });

    // ── Form Validation Helper ───────────────────────────────
    window.validateForm = function (formId, rules) {
        let valid = true;
        const $form = $(`#${formId}`);

        // Clear previous errors
        $form.find('.form-error').remove();
        $form.find('.is-invalid').removeClass('is-invalid');

        for (const [field, ruleSet] of Object.entries(rules)) {
            const $field = $form.find(`[name="${field}"]`);
            const value = $field.val()?.trim() || '';

            for (const rule of ruleSet) {
                let error = null;

                if (rule === 'required' && !value) {
                    error = 'This field is required.';
                } else if (rule === 'email' && value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                    error = 'Please enter a valid email.';
                } else if (rule.startsWith('min:')) {
                    const min = parseInt(rule.split(':')[1]);
                    if (value && value.length < min) error = `Minimum ${min} characters.`;
                } else if (rule.startsWith('max:')) {
                    const max = parseInt(rule.split(':')[1]);
                    if (value.length > max) error = `Maximum ${max} characters.`;
                } else if (rule === 'url' && value && !/^https?:\/\/.+/.test(value)) {
                    error = 'Please enter a valid URL.';
                }

                if (error) {
                    $field.addClass('is-invalid');
                    $field.after(`<p class="form-error">${error}</p>`);
                    valid = false;
                    break;
                }
            }
        }
        return valid;
    };
});
