<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="display: none;">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Hero Section Start -->
    <div class="container-m-1 py-1 bg-white hero-header mb-4">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-dark animated slideInLeft">Kegiatan Desa Tempurharjo</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <div class="container">
        <div class="text-editor" style="width: 80vw;">
            <div id="editor-container"></div>
            <button type="button" id="save-button" class="btn btn-success">Simpan</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var editor = new Quill('#editor-container', {
                theme: 'snow' // 'snow' is one of the built-in themes
            });

            function saveContent() {
                var content = editor.root.innerHTML;
                console.log('JSON Data:', JSON.stringify({ content: content }));

                // Pastikan URL endpoint sesuai dengan kebutuhan Anda
                var saveUrl = '<?=base_url('home/simpanartikel')?>';

                // Gunakan fetch API untuk mengirim konten ke server dan menyimpannya di database
                fetch(saveUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ content: content }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Saved successfully:', data);
                    // Tampilkan pesan konfirmasi kepada pengguna
                    alert('Content saved successfully!');
                })
                .catch(error => {
                    console.error('Error saving content:', error);
                    // Tampilkan pesan kesalahan kepada pengguna
                    alert('Error saving content. Please try again.');
                });
            }

            document.getElementById('save-button').addEventListener('click', saveContent);
        });
    </script>
</body>
</html>
