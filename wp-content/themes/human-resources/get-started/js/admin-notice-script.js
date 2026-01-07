jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'human_resources_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const human_resources_button = document.getElementById('install-activate-button');

    if (!human_resources_button) return;

    human_resources_button.addEventListener('click', function (e) {
        e.preventDefault();

        const human_resources_redirectUrl = human_resources_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const human_resources_checkData = new FormData();
        human_resources_checkData.append('action', 'check_plugin_activation');

        fetch(installPluginData.ajaxurl, {
            method: 'POST',
            body: human_resources_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = human_resources_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                human_resources_button.textContent = 'Installing & Activating...';

                const human_resources_installData = new FormData();
                human_resources_installData.append('action', 'install_and_activate_required_plugin');
                human_resources_installData.append('_ajax_nonce', installPluginData.nonce);

                fetch(installPluginData.ajaxurl, {
                    method: 'POST',
                    body: human_resources_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = human_resources_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        human_resources_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    human_resources_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
