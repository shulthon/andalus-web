@php

$sitename = get_setting_value('_site_name');
$sitecomp = get_setting_value('_site_company');
$mail = get_setting_value('_mail');
$location = get_setting_value('_location');
$phone = get_setting_value('_phone');
@endphp

<footer class="bg-andalus text-center py-5">
    <div class="container px-5">
    
    <img src="{{ asset('img/logo-square.png') }}" alt="Andalus Logo" height="90px" style="margin: 10px auto"/>
      <div style="width:80%;margin:0 auto; text-align:left; color:white">
        <b style="font-size:20px">Let's get in touch</b><br/><br/>
        <table>
        <tr>
        <td width="50px" height="50px" style="text-align:center"><img src="{{ asset('img/loc_icon.png') }}" style="margin:0 auto" alt="Lokasi" width="30px"/></td>
        <td>{{ $location }}</td>
        </tr>
        <tr>
        <td width="50px" height="50px" style="text-align:center"><img src="{{ asset('img/hp_icon.png') }}" style="margin:0 auto" alt="HP" width="30px"/></td>
        <td>{{ $phone }}</td>
        </tr>
        <tr>
        <td width="50pxpx" height="50px" style="text-align:center"><img src="{{ asset('img/mail_icon.png') }}" style="margin:0 auto" alt="email" width="25px"/></td>
        <td>{{ $mail }}</td>
        </tr>
        
        </table>
        <!-- Jl. Flores IV No. ... RT 001/RW 010, Aren Jaya, Kec. Bekasi Timur, Kota Bekasi<br/>
        +62 8xxxxxxxxxx<br/>
        andalusteknologi@gmail.com -->
      </div>
      <br/>    
      <!-- <b style="color:white">© 2023 PT Andalus Teknologi Indonesia</b> -->
        <div class="text-white small">
            <div class="mb-2">&copy; 2023 {{ $sitename }}. All Rights Reserved.</div>
            <!-- <a href="#!">Privacy</a>
            <span class="mx-1">&middot;</span>
            <a href="#!">Terms</a>
            <span class="mx-1">&middot;</span>
            <a href="#!">FAQ</a> -->
        </div>
    </div>
</footer>