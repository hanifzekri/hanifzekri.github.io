<?php

$author = 'Hanif Zekri Astaneh';
$title = 'Hanif Zekri Portfolio';
$desc = 'A short summary about me, my skills and connections';
$domain = 'https://hanifzekri.com';
$icon = '/asset/image/style/icon.png';

include('asset/include/icons.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0">
<title><?= $title; ?></title>
<meta name="description" content="<?= $desc; ?>">
<meta name="robots" content="index,follow">
<meta name="rating" content="General">
<meta property="og:url" content="<?= $domain; ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $title; ?>">
<meta property="og:image" content="<?= $domain . $icon; ?>">
<meta property="og:image:alt" content="<?= $title; ?>">
<meta property="og:title" content="<?= $title; ?>">
<meta property="og:description" content="<?= $desc; ?>">
<meta property="og:site_name" content="<?= $author; ?>">
<meta property="og:locale" content="en_US">
<meta property="article:author" content="<?= $author; ?>">
<link rel="icon" href="<?= $icon; ?>">
<link rel="stylesheet" href="/asset/css/style.css">
<script src="/asset/js/jquery.js"></script>
<script src="/asset/js/script.js"></script>
</head>
<body>

<!-------------->

<nav><a id="nav_start"> Start </a><a id="nav_skills"> Skills </a><a id="nav_experiences"> Experiences </a><a id="nav_certificate"> Certificate </a><a id="nav_history"> History </a><a id="nav_contact"> Contact </a></nav>

<!-------------->

<section class="start">
<img src="/asset/image/personal/me.png" alt="<?= $author; ?>">
<aside>
<span> Hi there ! </span>
<span> I'm Hanif <small> Zekri Astaneh, </small></span>
<h2> Full Stack Web&nbsp;Developer </h2>
<a id="nav_skills"> Proficient in PHP, JavaScript, CSS, MySQL, SEO, UI/UX design, Ecommerce</a>
</aside>
<label>
<a href="/asset/static/cv.pdf" target="_blank"><?= $icon_cv; ?>CV</a>
<a href="/asset/static/Portfolio.pdf" target="_blank"><?= $icon_portfolio; ?>Portfolio</a>
</label>
</section>

<!-------------->

<section class="skills">
<h3> Skills </h3>
<wrapper>
<div id="skill_backend">
<h5> Backend Development </h5>
<span> expert in PHP for robust backend development. </span>
</div>
<div id="skill_frontend">
<h5> Frontend Development, UI/UX Design </h5>
<span> Skilled in JavaScript, jQuery, HTML, and CSS for creating engaging user interfaces. </span>
</div>
<div id="skill_database">
<h5> Database Management </h5>
<span> Experienced in handling various databases, including MySQL, MySQLi, MariaDB, and PostgreSQL. </span>
</div>
<div id="skill_ecommerce">
<h5> Ecommerce & Online Marketing </h5>
<span> Well-versed in driving online sales and marketing strategies. </span>
</div>
<div id="skill_hosting">
<h5> Hosting Management </h5>
<span> Proficient in managing hosting environments using cPanel, DirectAdmin, and more. </span>
</div>
<div id="skill_familiar">
<h5> Familiar with </h5>
<span> SEO, NodeJS, React, TypeScript, PHP frameworks like Symfony and Laravel, PHP Composer, Git, Adobe Photoshop </span>
</div>
</wrapper>
</section>

<!-------------->

<section class="experiences">
<h3> Experiences </h3>
<wrapper>

<exptype id="exptype_developer">
<h4><small> as </small> Full Stack Developer </h4>
<span> Designed, developed, and supported a wide range of projects from the scratch. </span>
<a> Show more... </a>
</exptype>

<explist id="explist_developer">

<div id="expitem_vabimeh">
<h5> Vabimeh.ir </h5>
<small> Start date: September 2021 </small><small> Author: Asr Houshmand Sana Co. </small>
<p> Developed an interactive platform, simulating operators to present insurance plans and calculate prices instantly. Currently serving over five thousand users in Iran. </p>
<a><u> » </u> more </a>
</div>

<div id="expitem_noborder">
<h5> noBorder.tech </h5>
<small> Start date: January 2023 </small><small> Author: noBorderTeam </small>
<p> Pioneered a global payment solution based on cryptocurrencies. Leveraged NodeJS to develop an automated wallet creator for 12 cryptos. Currently spearheading an advertising campaign for a successful fintech launch. </p>
<a><u> » </u> more </a>
</div>

<div id="expitem_mitrarank">
<h5> MitraRank.ir </h5>
<small> Start date: April 2012 </small><small> Author: Mitra net pars Co. </small>
<p> Engineered a high-traffic advertising platform fostering interactions between advertisers, publishers, and consumers. Currently servicing over thirty thousand users. </p>
<a><u> » </u> more </a>
</div>

<div id="expitem_dm3">
<h5> DM3.ir </h5>
<small> Start date: November 2019 </small><small> Author: Mitra net pars Co. </small>
<p> Pioneered a free and comprehensive portal enabling users to create blogs, online stores, formal websites, and more without coding or design skills. </p>
<a><u> » </u> more </a>
</div>

<?php /*?><div id="expitem_persianlegends">
<h5> PersianLegends.ir </h5>
<small> Start date: May 2021, Author: Mitra net pars Co. </small>
<p> Crafted the first blockchain-based, play-to-earn Persian online game with over 5 thousand players. Empowered players to own their cards and coins, enabling easy trading in an open marketplace. </p>
<a><u> » </u> more </a>
</div><?php */?>

</explist>

<exptype id="exptype_consultant" class="second">
<h4><small> as </small> IT Consultant </h4>
<span> Provided strategic consulting services to diverse organizations. </span>
<a> Show more... </a>
</exptype>

<explist id="explist_consultant">

<div id="expitem_oheg">
<h5> OH, Engineering Group </h5>
<small> April 2022 – March 2023, Tehran, Part-time </small>
<p> Revamped the online brand presence of the "Omid Hosseinian Engineering Group," resulting in a remarkable 50% boost in the performance of their interior design department. </p>
<a><u> » </u> more </a>
</div>

<div id="expitem_tabarzin">
<h5> Tabarzin Sanat </h5>
<small> April 2017 - March 2020, Tehran, Full-time </small>
<p> Guided a traditional company in implementing automation systems and online processes. Achieved a remarkable 40% reduction in internal costs within two years. </p>
<a><u> » </u> more </a>
</div>

<div id="expitem_farzam">
<h5> Farzam Sanat Novin </h5>
<small> March 2014 – March 2017, Tehran, Full-time </small>
<p> Led a 5-members, cross-functional, developers’ team as a supervisor, delivering over 300 micro-websites catering to various services and clients. </p>
<a><u> » </u> more </a>
</div>

<div id="expitem_mitra">
<h5> Mitra Net Pars </h5>
<small> April 2012 - Present, Tehran, Freelance </small>
<p> Offered strategic guidance and consultancy for five thriving startups over a decade, enabling the provision of 20 advertising services and garnering 30,000 users. </p>
<a><u> » </u> more </a>
</div>

</explist>

</wrapper>
</section>

<section class="certificate">
<h3> Certificate </h3>
<wrapper>
<ul><li>
<h5> TOEFL iBT® Certificate </h5>
<small> Score : 102, Aug 2023, <a href="/asset/static/toefl.pdf" target="_blank">Certificate</a></small>
</li><li>
<h5> Harvard University CS50 </h5>
<small> Introduction to Computer Science, Online course, Oct 2023 </small>
</li>
<li>
<h5> Bachelor of Industrial Engineering </h5>
<small> University of Science & Technology, Jan 2006 - Feb 2011 </small>
</li><li>
<h5> High School Diploma </h5>
<small> Mathematical Physics, Sep 2000 - Jun 2003 </small>
</li></ul>
</wrapper>
</section>

<section class="history">
<img src="asset/image/personal/family.jpg" alt="<?= $author; ?> family">
<h3> History </h3>
<wrapper>
<p> An 36 years old, married man who started his journey <?= (date('Y') - 2011); ?> years ago with a small online shop. I loved achieving goals and being challenged. </p>
<p> I have been working in the e-commerce and business management areas all this time, so beside of my programming skills, I am also familiar with search optimization and advertising planning. </p>
<p> Currently, I am learning about blockchain technology (based on Node.js) and would also love to know more about AI and machine learning techniques. </p>
</wrapper>
</section>

<section class="contact">
<h3> Contact </h3>
<wrapper>
<div>
<?= $icon_gmail; ?>
<span> hanif.zekri@gmail.com </span>
<a href="mailto:hanif.zekri@gmail.com"></a>
</div><div>
<?= $icon_linkedin; ?>
<span> hanifzekri </span>
<a href="https://www.linkedin.com/in/hanifzekri"></a>
</div><div>
<?= $icon_github; ?>
<span> hanifzekri </span>
<a href="https://github.com/hanifzekri"></a>
</div><div>
<?= $icon_stack; ?>
<span> 2422804/hanif-zekri </span>
<a href="https://stackoverflow.com/users/2422804/hanif-zekri"></a>
</div>
</wrapper>
</section>

<!-------------->

<a class="navbars"></a>

</body>
</html>
