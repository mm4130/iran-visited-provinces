<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>به کدام استان‌های ایران سفر کرده‌اید؟</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
        <section class="section">
            <h3>به کدام استان‌های ایران سفر کرده‌اید؟</h3>
            <br>
            <div class="row">
            	<img class="img-responsive" style="margin: 0 auto; width: 400px;" src="http://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ?>generate.php?<?php echo http_build_query($_POST) ?>">
            </div>
            <br>
            <br>
            <form method="post">
            <div class="row"><div class="col-md-6 col-md-offset-3">
            	<div class="toggle-button toggle-button--sade">
                	<input id="azargharbi" type="checkbox" <?php if(isset($_POST['azargharbi'])) { echo 'checked'; } ?>>
                	<label for="azargharbi" data-text="آذربایجان غربی"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="azarsharghi" name="azarsharghi" type="checkbox" <?php if(isset($_POST['azarsharghi'])) { echo 'checked'; } ?>>
            	    <label for="azarsharghi" data-text="آذربایجان شرقی"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="ardebil" name="ardebil" type="checkbox" <?php if(isset($_POST['ardebil'])) { echo 'checked'; } ?>>
            	    <label for="ardebil" data-text="اردبیل"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div></div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="esfahan" name="esfahan" type="checkbox" <?php if(isset($_POST['esfahan'])) { echo 'checked'; } ?>>
                	<label for="esfahan" data-text="اصفهان"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="alborz" name="alborz" type="checkbox" <?php if(isset($_POST['alborz'])) { echo 'checked'; } ?> <?php if(isset($_POST['alborz'])) { echo 'checked'; } ?>>
            	    <label for="alborz" data-text="البرز"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="ilam" name="ilam" type="checkbox" <?php if(isset($_POST['ilam'])) { echo 'checked'; } ?>>
            	    <label for="ilam" data-text="ایلام"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="boushehr" name="boushehr" type="checkbox" <?php if(isset($_POST['boushehr'])) { echo 'checked'; } ?>>
                	<label for="boushehr" data-text="بوشهر"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="tehran" name="tehran" type="checkbox" <?php if(isset($_POST['tehran'])) { echo 'checked'; } ?>>
            	    <label for="tehran" data-text="تهران"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="chaharmahal" name="chaharmahal" type="checkbox" <?php if(isset($_POST['chaharmahal'])) { echo 'checked'; } ?>>
            	    <label for="chaharmahal" data-text="چهارمحال و بختیاری"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="khorasanjonoubi" name="khorasanjonoubi" type="checkbox" <?php if(isset($_POST['khorasanjonoubi'])) { echo 'checked'; } ?>>
                	<label for="khorasanjonoubi" data-text="خراسان جنوبی"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="khorasanrazavi" name="khorasanrazavi" type="checkbox" <?php if(isset($_POST['khorasanrazavi'])) { echo 'checked'; } ?>>
            	    <label for="khorasanrazavi" data-text="خراسان رضوی"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="khorasanshomali" name="khorasanshomali" type="checkbox" <?php if(isset($_POST['khorasanshomali'])) { echo 'checked'; } ?>>
            	    <label for="khorasanshomali" data-text="خراسان شمالی"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="khouzestan" name="khouzestan" type="checkbox" <?php if(isset($_POST['khouzestan'])) { echo 'checked'; } ?>>
                	<label for="khouzestan" data-text="خوزستان"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="zanjan" name="zanjan" type="checkbox" <?php if(isset($_POST['zanjan'])) { echo 'checked'; } ?>>
            	    <label for="zanjan" data-text="زنجان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="semnan" name="semnan" type="checkbox" <?php if(isset($_POST['semnan'])) { echo 'checked'; } ?>>
            	    <label for="semnan" data-text="سمنان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="sistan" name="sistan" type="checkbox" <?php if(isset($_POST['sistan'])) { echo 'checked'; } ?>>
                	<label for="sistan" data-text="سیستان و بلوچستان"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="fars" name="fars" type="checkbox" <?php if(isset($_POST['fars'])) { echo 'checked'; } ?>>
            	    <label for="fars" data-text="فارس"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="ghazvin" name="ghazvin" type="checkbox" <?php if(isset($_POST['ghazvin'])) { echo 'checked'; } ?>>
            	    <label for="ghazvin" data-text="قزوین"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="ghom" name="ghom" type="checkbox" <?php if(isset($_POST['ghom'])) { echo 'checked'; } ?>>
                	<label for="ghom" data-text="قم"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="kordestan" name="kordestan" type="checkbox" <?php if(isset($_POST['kordestan'])) { echo 'checked'; } ?>>
            	    <label for="kordestan" data-text="کردستان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="kerman" name="kerman" type="checkbox" <?php if(isset($_POST['kerman'])) { echo 'checked'; } ?>>
            	    <label for="kerman" data-text="کرمان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="kermanshah" name="kermanshah" type="checkbox" <?php if(isset($_POST['kermanshah'])) { echo 'checked'; } ?>>
                	<label for="kermanshah" data-text="کرمانشاه"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="kohgilouyeh" name="kohgilouyeh" type="checkbox" <?php if(isset($_POST['kohgilouyeh'])) { echo 'checked'; } ?>>
            	    <label for="kohgilouyeh" data-text="کهگیلویه و بویراحمد"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="golestan" name="golestan" type="checkbox" <?php if(isset($_POST['golestan'])) { echo 'checked'; } ?>>
            	    <label for="golestan" data-text="گلستان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="gilan" name="gilan" type="checkbox" <?php if(isset($_POST['gilan'])) { echo 'checked'; } ?>>
                	<label for="gilan" data-text="گیلان"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="lorestan" name="lorestan" type="checkbox" <?php if(isset($_POST['lorestan'])) { echo 'checked'; } ?>>
            	    <label for="lorestan" data-text="لرستان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="mazandaran" name="mazandaran" type="checkbox" <?php if(isset($_POST['mazandaran'])) { echo 'checked'; } ?>>
            	    <label for="mazandaran" data-text="مازندران"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="markazi" name="markazi" type="checkbox" <?php if(isset($_POST['markazi'])) { echo 'checked'; } ?>>
                	<label for="markazi" data-text="مرکزی"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="hormozgan" name="hormozgan" type="checkbox" <?php if(isset($_POST['hormozgan'])) { echo 'checked'; } ?>>
            	    <label for="hormozgan" data-text="هرمزگان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            	<div class="toggle-button toggle-button--sade">
            	    <input id="hamedan" name="hamedan" type="checkbox" <?php if(isset($_POST['hamedan'])) { echo 'checked'; } ?>>
            	    <label for="hamedan" data-text="همدان"></label>
            	    <div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <div class="row">
            	<div class="toggle-button toggle-button--sade">
                	<input id="yazd" name="yazd" type="checkbox" <?php if(isset($_POST['yazd'])) { echo 'checked'; } ?>>
                	<label for="yazd" data-text="یزد"></label>
                	<div class="toggle-button__icon"></div>
            	</div>
            </div>
            <br>
            <button type="submit" class="btn btn-default">ایجاد تصویر</button>
            </form>
        </section>
        <div class="row text-center" style="direction: rtl;">
            <p>طراحی شده توسط <a target="_blank" href="http://t.me/NimaH79"><b>نیما حیدری نسب</b></a></p>
        </div>
</div>
</body>
</html>