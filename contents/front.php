<div class="title">
	صفحه اصلی
</div>

<div class="dialog" style="float: right;">
	<div class="green box">
تهران‌لاگ چیست؟
	</div>

گروه کاربران گنو/لینوکس تهران یا «تهران‌لاگ» گروهی <b>مستقل</b> از کاربران کامپیوتر علاقه‌مند به <a href="http://www.gnu.org/gnu/linux-and-gnu.fa.html">گنو/لینوکس</a> ساکن تهران است. تم محوری جلسات تهران‌لاگ عبارت است از نرم افزار آزاد به صورت عمومی. با این حال، فعالیت‌های متفاوتی از جمله معرفی توزیع‌های آزاد گنو/لینوکسی، معرفی انواع سیستم‌عامل‌های آزاد خانواده‌ی بی‌اس‌دی، نصب آنها، محتوای آموزشی و حتی بحث آزاد در حوزه‌ی تئوریک نرم افزار آزاد نیز به طور همزمان در این اجتماع دنبال میشوند. در واقع تهران‌لاگ یک اجتماع از کاربران نرم افزار آزاد است که مایلند دقایقی را در کنار هم سپری کنند.
<br />
شرکت در جلسات این گروه برای <b>عموم</b> آزاد است.
شما نیز چنانچه علاقه‌مند هستید میتوانید در جلسات آن شرکت کنید و دانش خود را با سایر اعضا به اشتراک گذاشته و یا از دانش آنان استفاده کنید.

<b> برای اطلاعات بیشتر میتوانید عضو <a href="http://lists.tehlug.org/mailman/listinfo/general">لیست پستی</a> گروه شوید.</b>
</div>


<div class="dialog" style="float: left;">
	<div class="orange box">
		تابلوی اخبار و جلسات

		<a href="rss.php">
			<img src="images/rss.png" alt="RSS Feed" title="RSS Feed" style="float: left;" />
		</a>
	</div>

	<ul class="entries">
		<?php
		$next = getNextSession();

		foreach(getEntries(Null, 6) as $entry) {
			echo '<li class="entry">';

			if($entry == $next)
				echo 'جلسه بعدی:';

			echo '<a href="'.$entry->url.'">';

			echo $entry->title;

			echo '</a>';

			if($entry->date)
				echo "<div class='date'>".toPersian($entry->date)."</div>";

			echo '</li>';
		}
		?>
	</ul>
</div>

<div class="clear"></div>

<div class="dialog center" style="float: right;">
	<div class="blue box">
			محل برگزاری جلسات
	</div>
   	<iframe class="map" width="546" height="295" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=51.4347106218338%2C35.735870830055354%2C51.43881976604462%2C35.738701136409404&layer=mapnik&marker=35.738823%2C51.434814"></iframe>
گروه کاربران لینوکس تهران هر یک هفته در میان در روزهای چهارشنبه از ساعت <b>۱۸ الی ۲۰</b> 
جلسه برگزار می‌کند.
<br />
<b> در ماه رمضان جلسات از ساعت ۱۷ الی ۱۹ برگزار می‌شوند‫.‬</b>
<br />
<a href="http://www.openstreetmap.org/?mlat=35.738823&mlon=51.434814#map=16/35.7388/51.4337" target="_blank">
<b>آدرس محل برگزاری جلسات: خیابان سهروردی شمالی، خیابان خرمشهر (آپادانا)، خیابان شهید عربعلی (نوبخت)، کوچه نهم، شماره ۱۳</b>
</a>
<br />
</div>

<div class="dialog" style="float: left;">
	<div class="yellow box">
			معرفی کتاب و مقالات مفید
	</div>

<div style="width: 90%; text-align: justify; margin-left: auto; margin-right: auto;">
	<img src="images/success-of-opensource.jpe" style="float: left; margin-right: 15px;" />
بخش بزرگی از برنامه‌نویسی خلاقانه‌ و نوآورانه‌ای که اینترنت توانش را از آن میگیرد، سیستم عامل‌ها را بوجود میاورد و نرم‌افزارها را تولید میکند نتیجه‌ی استفاده از کدهای اوپن‌سورس است. باز نگه داشتن سورس‌کد برنامه‌ها باعث ایجاد شکل پیچیده‌ای از توسعه در تکنولوژی‌های مربوط به کامپیوتر گشته. آنطور که استیون وبر میگوید، موفقیت اوپن‌سورس در یک بازار بسیار رقابتی موجب واژگونی بسیاری از فرضیات پیشین شده، مثل اینکه کسب و کارها چگونه باید اداره شوند و یا محصولات فکری چگونه تولید و توسط قانون محافظت شوند. به صورت سنتی، قوانین مربوط به دارایی‌های فکری به کمپانی‌ها اجازه داده است تا دانش را در کنترل داشته باشند و از حقوق شخص نوآور به قیمت همکاری سراسری در بخش صنعت محافظت کنند. مهندسین نرم‌افزارهای جدید نیز به نوبه خود از حقوق و مزایای قابل توجه برخوردار میشوند. اما همانطور که وبر نشان میدهد بر خلاف تصور غالب که ادعا میکند نوآوری بر پایه‌ی ثروت شخصی و شرکتی به پیش میرود، تضمین توزیع آزاد کدهای منبع میان برنامه‌نویسان به پیدایش شیوه‌ی بسیار کارآمدتری برای تولید محصولات فکری منجر خواهد شد. در مثال نرم‌افزار آزاد، برنامه‌نویسان مستقل (گاهی صدها و هزاران نفر از آنان) به توسعه‌ی این برنامه‌ها که به صورت کاملا ارگانیک و بوسیله‌ی آزمایش و خطا توسعه می‌یابند کمک میکنند، بدون آنکه حقوقی در قبال آن دریافت کنند. وبر استدلال میکند که موفقیت اوپن‌سورس نوعی استثنای عجیب و غریب در قوانین اقتصادی نیست. جامعه‌ی نرم‌افزار آزاد بوسیله‌ی استانداردها، قوانین، روندهای تصمیم‌گیری و ضمانت‌های اجرایی هدایت میشود. وبر در این کتاب دینامیسم سیاسی و اقتصادی این مدل مرموز و مهم توسعه‌ی بازار را توضیح میدهد.
	</div>
</div>
