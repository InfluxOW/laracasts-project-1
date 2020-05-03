FilePond.setOptions({
    server: {
        url: app_url,
        process: {
            url: url,
            method: 'POST',
            withCredentials: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            timeout: 7000,
            onload: null,
            onerror: null,
            ondata: null
        }
    }
});
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
