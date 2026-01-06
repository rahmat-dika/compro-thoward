<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Certificate of Authenticity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('assets/images/Sternics-sm.png') }}">
  <style>
    @font-face {
      font-family: 'NotoSerifMedium';
      src: url('fonts/NotoSerifDisplay_SemiCondensed-Medium.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    @font-face {
      font-family: 'NotoSerifSemiBold';
      src: url('fonts/NotoSerifDisplay_SemiCondensed-SemiBold.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    @font-face {
      font-family: 'NotoSerifLight';
      src: url('fonts/NotoSerifDisplay-Light.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
    
    @page { size: A4; margin: 0; }
    html,body{height:100%;}
    body{
      font-family: 'NotoSerifMedium';
      /* font-family: 'Times New Roman', 'Georgia', serif; */
      background: #111;
    }

    .certificate-wrap{
      width: 100%;
      max-width: 1000px;
      margin: 0 auto;
      background: #1a1a1a;
      padding: 60px;
      border: 12px solid #c59d5f;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      color: #e5c07b;
      position: relative;
    }

    .title{
      font-family: 'NotoSerifSemiBold';
      font-size: 32px;
      letter-spacing: 6px;
      color: #d4af37;
      font-weight: 700;
      text-align: center;
      margin-bottom: 10px;
    }

    img{
      margin: 0 auto;
      height: 130px;
      display: block;
    }

    .subtitle{
      font-family: 'NotoSerifSemiBold';
      text-align: center;
      font-size: 16px;
      color: #bbb;
      margin: 40px auto;
    }

    .body{
      max-width: 700px;
      margin: 10 auto;
      color: #e5c07b;
      font-size: 17px;
      height: 25vh;
      text-align:left;
    }

    .spec-item{
      margin-bottom: 16px;
      font-size: 17px;
    }

    .spec-label{font-weight:700; width:180px; display:inline-block; color:#d4af37}

    .issuer{
      margin-top: 50px;
      text-align: center;
      color: #d4af37;
      font-size: 16px;
      font-family: 'NotoSerifLight';
    }

    .footer{
      margin-top: 30px;
      text-align: center;
      font-size: 15px;
      color: #c59d5f;
      font-family: 'NotoSerifLight';
    }
</style>
</head>
<body>
  <div class="certificate-wrap">
    <div class="header">
      <img src="{{ asset('assets/images/Sternics-logo.png') }}" alt="logo">
      <div class="title">CERTIFICATE OF AUTHENTICITY</div>
      <div class="subtitle">This product is guaranteed to be original and meets the following specifications:</div>
    </div>

    <div class="body">
      <div class="specs">
        <div class="left">
          <div class="spec-item"><span class="spec-label">Collection Name:</span> {{ $certificate->collection_name ?? '-' }}</div>
          <div class="spec-item"><span class="spec-label">Serial Number:</span> {{ $certificate->serial_number ?? '-' }}</div>
          <div class="spec-item"><span class="spec-label">QR Code Number:</span> {{ $certificate->qr_code_number ?? '-' }}</div>
        </div>      
      </div>
    </div>

    <div class="issuer">
      Manufactured by <br>
      <strong>PT Thoward First International</strong><br>
      Jakarta Barat, Indonesia
    </div>

    <div class="footer">
      <div class="website">www.thoward.net</div>
      <div style="margin-top:6px">@thoward.official</div>
    </div>
  </div>
</body>
</html>
