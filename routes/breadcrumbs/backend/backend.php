<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.settings.index', function ($trail) {
    $trail->push('General Settings', route('admin.settings.index'));
});

Breadcrumbs::for('admin.about_us', function ($trail) {
    $trail->push('About Us', route('admin.about_us'));
});

Breadcrumbs::for('admin.privacy_policy', function ($trail) {
    $trail->push('Privacy Policy', route('admin.privacy_policy'));
});

Breadcrumbs::for('admin.terms_and_conditions', function ($trail) {
    $trail->push('Terms and Conditions', route('admin.terms_and_conditions'));
});

Breadcrumbs::for('admin.contactus_thanks', function ($trail) {
    $trail->push('Contact Us Thanks Email', route('admin.contactus_thanks'));
});

Breadcrumbs::for('admin.letter_template_categories.index', function ($trail) {
    $trail->push('Template Categories', route('admin.letter_template_categories.index'));
});

Breadcrumbs::for('admin.letter_template_categories.create', function ($trail) {
    $trail->push('Template Categories Create', route('admin.letter_template_categories.create'));
});

Breadcrumbs::for('admin.letter_template_categories.edit', function ($trail) {
    $trail->push('Template Categories Edit', route('admin.letter_template_categories.edit',1));
});

Breadcrumbs::for('admin.letter_templates.index', function ($trail) {
    $trail->push('Letters Templates', route('admin.letter_templates.index'));
});

Breadcrumbs::for('admin.letter_templates.create', function ($trail) {
    $trail->push('Letters Templates Create', route('admin.letter_templates.create'));
});