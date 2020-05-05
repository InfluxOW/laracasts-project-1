
FilePond.create(
    document.querySelector('input[id="avatar"]'),
    {
        labelIdle: `Drag & Drop your avatar or <span class="filepond--label-action">Browse</span>`,
        imagePreviewHeight: 200,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleButtonRemoveItemPosition: 'bottom center',
        styleButtonProcessItemPosition: 'bottom center',
        styleLoadIndicatorPosition: 'bottom center',
        styleProgressIndicatorPosition: 'bottom center',
        maxFiles: 1,
        maxFileSize: '1MB',
        acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg', 'image/gif', 'image/svg']
    }
);
