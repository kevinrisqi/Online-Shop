const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Data Item',
        text: 'Berhasil ' + flashData,
        showConfirmButton: false,
        timer: 1500
    })
}