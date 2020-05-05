FilePond.create(
    document.querySelector('input[id="image"]'),
    {
        labelIdle: `Drag & Drop your image or <span class="filepond--label-action">Browse</span>`,
        imagePreviewHeight: 300,
        stylePanelLayout: 'compact',
        maxFiles: 1,
        maxFileSize: '3MB',
        acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg', 'image/gif', 'image/svg']
    }
);
