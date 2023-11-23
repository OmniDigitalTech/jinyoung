@extends('website::layouts.master')

@section('content')
    <div class="main">
        <div class="header">
            <div class="header_resize">
                <div class="logo">
                    <a href="#"><img src="{{ URL::asset('template/img/exin.png') }}" alt="사이트 로고"></a>
                </div>
                <div class="menu_nav">
                    <ul>
                        <li class="active"><a href="index.html"><span>Home</span></a></li>
                        <li><a href="#"><span>Support</span></a></li>
                        <li><a href="#"><span>About Us</span></a></li>
                        <li><a href="#"><span>Blog</span></a></li>
                        <li><a href="#"><span>Contact Us</span></a></li>
                    </ul>
                </div>
                <div class="clr"></div>
                <img src="{{ URL::asset('template/img/sub_bg.png') }}" alt="" height="315"/>
            </div>
        </div>
        <div class="clr"></div>
        <div class="content">
            <div class="content_resize">
                <div class="mainbar">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td colspan="2">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td style="width:100%; background-color:#FFF"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding:0px 0px 10px 12px; color: #0a0c0d">
                                <strong>HOMEPAGE</strong>
                            </td>
                            <td align="right" style="padding:0px 12px 10px 0px;">
                                Homepage &gt; breadcumb &gt; <strong>breadcumb</strong>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center" style="padding:0px 0px 10px 0px;">
                                <table width="99%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td height="1" bgcolor="#C2C2C2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="99%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td height="1">

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="article">
                        <h2><span>Template</span> License</h2>
                        <div class="clr"></div>
                        <p>Posted on 18. Sep, 2015 by Sara in Filed under templates, internet, with Comments 18</p>
                        <div class="clr"></div>
                        <p>This is a free CSS website template by CoolWebTemplates.net. This work is distributed under the Creative Commons Attribution 3.0 License, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to CoolWebTemplates.net.</p>
                        <p>Maecenas dignissim mauris in arcu congue tincidunt. Vestibulum elit nunc, accumsan vitae faucibus vel, scelerisque a quam. Aenean at metus id elit bibendum faucibus. Curabitur ultrices ante nec neque consectetur a aliquet libero lobortis. Ut nibh sem, pellentesque in dictum eu, convallis blandit erat. Cras vehicula tellus nec purus sagittis id scelerisque risus congue. Quisque sed semper massa. Donec id lacus mauris, vitae pretium risus. Fusce sed tempor erat. </p>
                        <p><a href="#">Read more </a></p>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="gadget">
                        <div class="aside_tit">
                            <ul> Side Menu</ul>
                        </div>
                        <ul class="pt-3">
                            <li class="pt-1"><a href="#">Home</a></li>
                            <li class="pt-1"><a href="#">TemplateInfo</a></li>
                            <li class="pt-1"><a href="#">Style Demo</a></li>
                            <li class="pt-1"><a href="#">Blog</a></li>
                            <li class="pt-1"><a href="#">Archives</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="footer text-center">
                <img class="pb-3" src="{{ URL::asset('template/img/bar.png') }}" width="986" height="21">
                <p>Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
                <p>Design by <a target="_blank" href="http://www.coolwebtemplates.net/">Omniditech</a></p>
                <div class="clr"></div>
            </div>
        </div>
    </div>
@endsection
