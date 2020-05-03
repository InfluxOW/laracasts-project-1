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
