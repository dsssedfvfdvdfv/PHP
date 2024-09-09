<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Lỗi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thử lại</button>
            </div>
        </div>
    </div>
</div>

    <div class="container mt-5">
        <div class="row d-flex align-items-stretch">
            <div class="col-lg-8">
                <div class="form-container h-100">
                    <h2 class="mb-4">Gửi tin nhắn cho chúng tôi</h2>
                    <form action="thankyou.php" method="POST" id="contactForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for=
                                "name" class="form-label">Tên</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nguyên Tùng" require>
                                <div class="invalid-feedback">Nhập họ và tên.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="dnt123@gmail.com">
                                <div class="invalid-feedback">Nhập email.</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="0123456789">
                                <div class="invalid-feedback">Nhập số điện thoại.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label">Công ty</label>
                                <input type="text" id="company" name="company" class="form-control" placeholder="VNPT">
                                <div class="invalid-feedback">Nhập tên công ty.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Tin nhắn</label>
                            <textarea id="message" name="message" class="form-control" rows="4" placeholder="Nhập tin nhắn vào đây..."></textarea>
                            <div class="invalid-feedback">Nhập tin nhắn.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>


                    </form>
                </div>
            </div>

            <div class="col-lg-4" >
                <div class="contact-info h-100 d-flex flex-column justify-content-center">
                    <h4>Thông tin liên hệ</h4>
                    <p><strong>Địa chi:</strong> Cần Thơ</p>
                    <p><strong>Điện thoại:</strong> 0829125832</p>
                    <p><strong>Email:</strong> daonguyentung2003@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    
</body>

</html>