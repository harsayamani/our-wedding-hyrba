<!doctype html>
<html lang="en">

<head>
    <title>Generate Invitation Link | HYRBA Wedding</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/template_invitation_link/css/style.css">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Generate Invitation Link</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                    <h3 class="mb-4">Write Guest</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Link generate succesfully, and copied !
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-primary copy-button" onclick="generateLink()">Generate Link</button>
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                                    <h3>Invitation Link</h3>
                                    <p class="mb-4">Here is invitation link</p>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><div id="guest"><span>......</span></div> <div id="guest_link"><a href="#">......</a></div></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/template_invitation_link/js/jquery.min.js"></script>
    <script src="/template_invitation_link/js/popper.js"></script>
    <script src="/template_invitation_link/js/bootstrap.min.js"></script>
    <script src="/template_invitation_link/js/jquery.validate.min.js"></script>
    <script src="/template_invitation_link/js/main.js"></script>
    <script>
        function generateLink() {
            const name = document.getElementById('name').value;

            $.ajax({
                url: "/invitation/generate-link/generate",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name
                },
                dataType: "json",
                success: function(res) {
                    $(document).ready(() => {
                        $('#guest').empty();
                        $('#guest').html(`
                            <span>${res.name}</span>
                        `)

                        $('#guest_link').empty();
                        $('#guest_link').html(`
                            <a href="${res.link}" target="_blank">${res.link}</a>
                        `)
                    });

                    const tempInput = document.createElement("input");
                    tempInput.value = res.link;
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    document.execCommand("copy");
                    document.body.removeChild(tempInput);

                    const Toast = Swal.mixin({
                        toast: false,
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        title: 'Success!',
                        text: 'Generate link succesfully!',
                        icon: 'success',
                    });
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    const Toast = Swal.mixin({
                        toast: false,
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        title: 'Warning!',
                        text: 'Name must be input!',
                        icon: 'warning',
                    })
                }
            });
        }
    </script>
</body>

</html>
