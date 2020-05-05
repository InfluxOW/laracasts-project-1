FilePond.create(
    document.querySelector('input[id="banner"]'),
    {
        labelIdle: `Drag & Drop your banner or <span class="filepond--label-action">Browse</span>`,
        imagePreviewHeight: 300,
        stylePanelLayout: 'compact',
        maxFiles: 1,
        maxFileSize: '1MB',
        acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg', 'image/gif', 'image/svg'],
        imageValidateSizeMinWidth: 600,
        imageValidateSizeMaxWidth: 900,
        imageValidateSizeMinHeight: 150,
        imageValidateSizeMaxHeight: 350,
    }
);
