<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<!-- Flexslider  -->
<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
<!-- Theme style  -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>
    .portfolioFilter {margin-top: 35px;color: #666;}
    .portfolioFilter a:hover {color: #FFA804;}
    .portfolio-heading:after {content: '';height: 10px;width: 50px;border-radius: 5px;
        margin: 20px 0;display: block;background: #FFA804;}

    .portfolio-about .why-me-item {display: inline-flex}
    .portfolio-about .why-me-item i {padding-right: 8px;color: #00c2e5;line-height: 1.8;}

    .portfolio-about .skills-panel .panel-body ul {padding-left: 20px}

    .margin-t-10{ margin-top: 10px; }
    .margin-t-30{ margin-top: 30px; }
    .margin-b-20{ margin-bottom: 20px; }
    .margin-b-30{ margin-bottom: 30px; }
    .margin-b-50{ margin-bottom: 50px; }
    .margin-tb-30{ margin-top: 30px; margin-bottom: 30px; }
    .margin-tb-50{ margin-top: 50px; margin-bottom: 50px; }
    .font-yellow{ color: #F75940; }
    .font-semi-white{ color: #ddd; }
    .font-lite-black{ color: #999; }
    .center-text{ text-align: center; }

    .education-section .portfolio-heading:after {margin: 20px auto;}
    .education-wrapper { position: relative; overflow: hidden; text-align: center; }
    .education-wrapper:after{ content:''; position: absolute; top: 8px; bottom: 0; left: 50%;
        margin-left: -1px; width: 2px; background: #ccc; }
    .education-wrapper .education{ width: 50%; clear: both; position: relative; margin-top: -30px; }
    .education-wrapper .education:first-child{ margin-top: 0; }
    .education-wrapper .education.left{ float: left; padding-right: 50px; text-align: right; }
    .education-wrapper .education.right{ float: right; padding-left: 50px; text-align: left; }
    .education-wrapper .education:after{ content:''; position: absolute; top: 8px; width: 16px;
        height: 16px; border-radius: 10px; z-index: 1;
        box-shadow: 0 0 0 8px rgba(255,171,0, .4); background: #FFAB00; }
    .education-wrapper .education.left:after{ right: -8px; }
    .education-wrapper .education.right:after{ left: -8px; }

</style>
