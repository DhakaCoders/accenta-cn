<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#1D2B5B">
  <link rel="shortcut icon" href="<?php echo THEME_URI; ?>/assets/images/favicon.png" />
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<svg style="display: none;">
 <symbol id="play-icon-white-svg" width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
  <path d="M68.2842 11.7156C60.7292 4.16063 50.6844 0 40 0C29.3155 0 19.2705 4.16078 11.7156 11.7156C4.16063 19.2706 0 29.3156 0 40C0 50.6844 4.16063 60.7294 11.7156 68.2844C19.2705 75.8392 29.3155 80 40 80C50.6844 80 60.7292 75.8394 68.2842 68.2844C75.8392 60.7292 80 50.6844 80 40C80 29.3156 75.8392 19.2708 68.2842 11.7156ZM40 75.3125C20.5286 75.3125 4.6875 59.4714 4.6875 40C4.6875 20.5286 20.5286 4.6875 40 4.6875C59.4714 4.6875 75.3125 20.5286 75.3125 40C75.3125 59.4714 59.4714 75.3125 40 75.3125Z"/>
  <path d="M62.6389 38.05L32.5139 17.9664C31.7946 17.487 30.8701 17.4422 30.1079 17.8501C29.3459 18.2579 28.8701 19.0522 28.8701 19.9165V60.0831C28.8701 60.9475 29.3459 61.7417 30.1079 62.1495C30.4545 62.335 30.8345 62.4268 31.2137 62.4268C31.6684 62.4268 32.1218 62.2947 32.5139 62.0332L62.6389 41.9501C63.2909 41.5154 63.6826 40.7836 63.6826 40C63.6825 39.2165 63.2909 38.4847 62.6389 38.05ZM33.5575 55.704V24.2961L57.1134 40.0001L33.5575 55.704Z"/>
 </symbol>
 <symbol id="fl-prev-icon-svg" width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
  <path d="M23 9H3.0505L10.6895 1.724C11.0895 1.343 11.105 0.71 10.724 0.31C10.3435 -0.0895003 9.7105 -0.1055 9.31 0.2755L0.586 8.5855C0.2085 8.9635 0 9.4655 0 10C0 10.534 0.2085 11.0365 0.6035 11.431L9.3105 19.724C9.504 19.9085 9.752 20 10 20C10.264 20 10.528 19.896 10.7245 19.6895C11.1055 19.2895 11.09 18.657 10.69 18.276L3.019 11H23C23.552 11 24 10.552 24 10C24 9.448 23.552 9 23 9Z"/>
  </symbol>
  <symbol id="fl-next-icon-svg" width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 9H20.9495L13.3105 1.724C12.9105 1.343 12.895 0.71 13.276 0.31C13.6565 -0.0895003 14.2895 -0.1055 14.69 0.2755L23.414 8.5855C23.7915 8.9635 24 9.4655 24 10C24 10.534 23.7915 11.0365 23.3965 11.431L14.6895 19.724C14.496 19.9085 14.248 20 14 20C13.736 20 13.472 19.896 13.2755 19.6895C12.8945 19.2895 12.91 18.657 13.31 18.276L20.981 11H1C0.448 11 0 10.552 0 10C0 9.448 0.448 9 1 9Z"/>
  </symbol>
  <symbol id="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" xmlns="http://www.w3.org/2000/svg">
  <path d="M23.5877 8.80213V3.01216C23.5877 1.73567 22.5492 0.697144 21.2727 0.697144H4.72733C3.45084 0.697144 2.41231 1.73567 2.41231 3.01216V8.80213C1.02314 9.1867 0 10.4613 0 11.9711V16.3705C0 16.7967 0.345617 17.1423 0.771875 17.1423H2.41231V18.5309C2.41231 18.9572 2.75793 19.3028 3.18419 19.3028C3.61045 19.3028 3.95606 18.9572 3.95606 18.5309V17.1423H22.0439V18.5309C22.0439 18.9572 22.3896 19.3028 22.8158 19.3028C23.2421 19.3028 23.5877 18.9572 23.5877 18.5309V17.1423H25.2281C25.6544 17.1423 26 16.7967 26 16.3705V11.9711C26 10.4613 24.9768 9.1867 23.5877 8.80213ZM3.95606 3.01216C3.95606 2.58692 4.30209 2.24089 4.72733 2.24089H21.2727C21.698 2.24089 22.044 2.58692 22.044 3.01216V8.6827H20.2354V7.13331C20.2354 5.78603 19.1394 4.68997 17.7921 4.68997H14.6715C14.0254 4.68997 13.4374 4.94251 13.0001 5.35358C12.5627 4.94256 11.9747 4.68997 11.3286 4.68997H8.20803C6.86075 4.68997 5.76469 5.78608 5.76469 7.13331V8.6827H3.95606V3.01216ZM18.6917 7.13331V8.6827H13.7719V7.13331C13.7719 6.63723 14.1755 6.23372 14.6715 6.23372H17.792C18.2881 6.23372 18.6917 6.63728 18.6917 7.13331ZM12.2281 7.13331V8.6827H7.30829V7.13331C7.30829 6.63723 7.71189 6.23372 8.20788 6.23372H11.3284C11.8245 6.23372 12.2281 6.63728 12.2281 7.13331ZM24.4563 15.5986H1.54375V11.9711C1.54375 11.0091 2.32639 10.2264 3.28844 10.2264H22.7116C23.6736 10.2264 24.4563 11.0091 24.4563 11.9711V15.5986Z"/>
  </symbol>
  <symbol id="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M25.9967 10.0961C25.9561 9.63821 25.5559 9.30244 25.0944 9.34078C25.0021 9.34845 15.8199 10.1304 10.3536 7.68408C5.57677 5.54606 1.01997 5.56947 0.820753 5.57897C0.361939 5.58481 -0.00577129 5.96115 6.86091e-05 6.42037C0.00550226 6.87604 0.376818 7.24243 0.832026 7.24243C0.835175 7.24243 0.838323 7.24243 0.841471 7.24243C0.889257 7.25187 5.24598 7.2208 9.6748 9.20245C13.2793 10.8163 18.1941 11.1368 21.5332 11.1368C23.6194 11.1368 25.0913 11.012 25.2413 10.9984C25.6993 10.9578 26.0373 10.554 25.9967 10.0961Z"/>
    <path d="M24.1035 11.5671C23.6573 11.4599 23.2075 11.7352 23.1003 12.1819C22.7519 13.6317 21.5882 17.0041 18.3028 17.0041H8.3562C7.43756 17.0041 6.36733 16.5423 5.40192 15.6422C5.30376 15.5294 5.19691 15.4216 5.08154 15.3204C5.07854 15.3178 5.07529 15.3156 5.07225 15.3131C3.75486 13.9066 2.70292 11.6396 2.62802 8.5733C2.61629 8.11362 2.22735 7.74678 1.7758 7.7616C1.31612 7.77333 0.953286 8.15415 0.964103 8.61382C1.05378 12.2812 2.41682 15.123 4.22566 16.8357C4.44661 17.1371 4.52639 17.4585 4.47353 17.5991C4.44966 17.6622 4.27568 17.7271 3.98948 17.7271C3.5298 17.7271 3.15752 18.0994 3.15752 18.5591C3.15752 19.0188 3.5298 19.391 3.98948 19.391C5.42172 19.391 5.89405 18.5483 6.03014 18.1855C6.03893 18.1621 6.04695 18.1384 6.05477 18.1147C6.81045 18.478 7.59203 18.6682 8.35564 18.6682H18.3023C19.2022 18.6682 20.0428 18.4759 20.8053 18.1101C20.8266 18.1807 20.8519 18.2503 20.8824 18.3184C21.0618 18.7191 21.5557 19.391 22.847 19.391C23.3066 19.391 23.6785 19.0188 23.6785 18.5591C23.6785 18.0994 23.3062 17.7271 22.8465 17.7271C22.5387 17.7271 22.4175 17.6591 22.4021 17.641C22.3408 17.5482 22.4215 16.9911 22.9132 16.4395C22.9567 16.3909 22.9926 16.3382 23.0225 16.2833C23.7813 15.3075 24.3618 14.0554 24.7182 12.5705C24.8259 12.1233 24.5501 11.6739 24.1035 11.5671Z"/>
    <path d="M2.41956 5.1823C2.87923 5.1823 3.25014 4.82399 3.25014 4.36431C3.5007 3.51432 7.82862 2.05455 8.87193 2.27271C9.30551 2.58548 9.34471 3.14971 9.34603 3.16413C9.36183 3.62381 9.75483 3.9835 10.2059 3.96679C10.6651 3.951 11.0244 3.56612 11.0086 3.1069C10.9896 2.55663 10.6967 1.45965 9.71735 0.836808C8.58299 0.116164 5.00054 1.25957 3.42762 2.12351C2.19007 2.80313 1.58887 3.52692 1.58887 4.33679C1.58892 4.79651 1.95983 5.1823 2.41956 5.1823Z"/>
    <path d="M10.1481 4.48599C9.52482 4.48599 9.02051 4.99208 9.02051 5.61269C9.02051 6.23598 9.52482 6.73847 10.1481 6.73847C10.77 6.73847 11.2739 6.23598 11.2739 5.61269C11.2739 4.99208 10.77 4.48599 10.1481 4.48599Z"/>
    </symbol>
    <symbol id="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M1.41611 1.94941H14.0949V2.77106H15.2222V0H14.0949V0.822163H1.41611V0H0.288086V2.77106H1.41611V1.94941Z"/>
    <path d="M19.7755 5.50427V4.37677H17.0039V5.50427H17.8261V22.8725H17.0039V24H19.7755V22.8725H18.9536V5.50427H19.7755Z"/>
    <path d="M0.222656 24H15.2882V4.37677H0.222656V24ZM1.44428 5.59863H14.0666V22.7789H1.44428V5.59863Z"/>
    </symbol>
    <symbol id="hu-dtls-sidebar-btm-dsc-icon-4-svg" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.86969 4.68002H7.92969C7.79708 4.68002 7.6699 4.7327 7.57613 4.82647C7.48237 4.92024 7.42969 5.04741 7.42969 5.18002V14.82C7.42969 14.9526 7.48237 15.0798 7.57613 15.1736C7.6699 15.2673 7.79708 15.32 7.92969 15.32C8.0623 15.32 8.18947 15.2673 8.28324 15.1736C8.37701 15.0798 8.42969 14.9526 8.42969 14.82V11.195H9.86969C11.9147 11.195 13.5847 9.73502 13.5847 7.94002C13.5847 6.14502 11.9147 4.68002 9.86969 4.68002ZM9.86969 10.18H8.42969V5.68002H9.86969C11.3697 5.68002 12.5847 6.68002 12.5847 7.94002C12.5847 9.20002 11.3647 10.195 9.86969 10.195V10.18Z"/>
    <path d="M16.095 2.00003H3.87001C3.37135 2.0053 2.89499 2.20744 2.54472 2.56239C2.19445 2.91735 1.99866 3.39635 2.00001 3.89503V16.12C2.0026 16.6161 2.20014 17.0913 2.54999 17.443C2.89984 17.7947 3.37395 17.9948 3.87001 18H16.095C16.3436 18.002 16.5902 17.9549 16.8206 17.8614C17.051 17.768 17.2606 17.63 17.4376 17.4553C17.6146 17.2807 17.7553 17.0728 17.8518 16.8437C17.9483 16.6146 17.9987 16.3687 18 16.12V3.89503C18 3.64533 17.9507 3.39809 17.8548 3.16752C17.759 2.93696 17.6185 2.72761 17.4414 2.55151C17.2644 2.37541 17.0543 2.23604 16.8233 2.14139C16.5922 2.04675 16.3447 1.99871 16.095 2.00003ZM17 16.12C16.9987 16.2373 16.9742 16.3532 16.928 16.461C16.8817 16.5688 16.8146 16.6664 16.7305 16.7482C16.6464 16.83 16.547 16.8944 16.4379 16.9376C16.3288 16.9808 16.2123 17.002 16.095 17H3.87001C3.63917 16.9949 3.41938 16.9002 3.25704 16.736C3.09471 16.5718 3.00254 16.3509 3.00001 16.12V3.89503C2.99864 3.66154 3.08907 3.43687 3.25182 3.26945C3.41456 3.10203 3.63658 3.00527 3.87001 3.00003H16.095C16.2136 2.99803 16.3313 3.01974 16.4414 3.06388C16.5514 3.10802 16.6515 3.17371 16.7358 3.25709C16.8201 3.34046 16.8869 3.43985 16.9323 3.5494C16.9777 3.65895 17.0007 3.77646 17 3.89503V16.12Z"/>
    <path d="M18.105 2.65632e-05H1.86001C1.36355 0.00660956 0.889741 0.208795 0.541484 0.56267C0.193226 0.916545 -0.00135353 1.39353 7.0879e-06 1.89003V18.13C0.00388736 18.6231 0.200784 19.0949 0.548484 19.4445C0.896183 19.7941 1.36701 19.9935 1.86001 20H18.105C18.6041 20.0027 19.0838 19.8073 19.4391 19.4568C19.7943 19.1062 19.996 18.6291 20 18.13V1.89003C20.0007 1.64122 19.9521 1.39475 19.857 1.16481C19.762 0.934882 19.6223 0.726044 19.4461 0.550344C19.27 0.374644 19.0608 0.235557 18.8306 0.141106C18.6004 0.0466538 18.3538 -0.00129425 18.105 2.65632e-05ZM19 18.13C18.9961 18.3639 18.8997 18.5867 18.732 18.7497C18.5643 18.9127 18.3389 19.0027 18.105 19H1.86001C1.63222 18.9936 1.41569 18.8996 1.25549 18.7375C1.09529 18.5755 1.00378 18.3579 1.00001 18.13V1.89003C0.999876 1.65909 1.08951 1.43715 1.24999 1.27108C1.41046 1.105 1.6292 1.00781 1.86001 1.00003H18.105C18.2223 0.999368 18.3386 1.0219 18.4471 1.06633C18.5557 1.11076 18.6544 1.17622 18.7376 1.25893C18.8207 1.34164 18.8867 1.43997 18.9318 1.54828C18.9768 1.65659 19 1.77273 19 1.89003V18.13Z"/>
    </symbol>
  <symbol id="ftr-top-grd-item-img-svg" width="42" height="42" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0)">
    <path d="M18.2519 31.3485C18.0343 31.3485 17.8257 31.262 17.6719 31.1082L8.75229 22.1889C8.43185 21.8684 8.43185 21.349 8.75229 21.0286L13.3925 16.3884C13.7129 16.0679 14.2324 16.0679 14.5528 16.3884L18.2519 20.0874L27.4471 10.8919C27.6009 10.7381 27.8098 10.6516 28.0274 10.6516C28.2446 10.6516 28.4536 10.7381 28.6074 10.8919L33.2476 15.5325C33.568 15.8526 33.568 16.372 33.2476 16.6924L18.8319 31.1085C18.6781 31.2623 18.4695 31.3485 18.2519 31.3485ZM10.4926 21.6089L18.2519 29.3682L31.5076 16.1125L28.0274 12.6319L18.8319 21.8274C18.5114 22.1478 17.992 22.1478 17.6719 21.8274L13.9728 18.1283L10.4926 21.6089Z"/>
    <path d="M20.9949 42C20.4591 42 19.9227 41.9795 19.3853 41.9385C14.3949 41.5559 9.69475 39.3933 6.15074 35.8496C2.1844 31.8829 0 26.6095 0 21C0 15.3908 2.1844 10.1171 6.15074 6.15074C10.1171 2.1844 15.3908 0 21 0C26.6095 0 31.8829 2.1844 35.8496 6.15074C39.3933 9.69475 41.5559 14.3949 41.9385 19.3853C42.3169 24.3216 40.9422 29.2419 38.0679 33.2403C37.8036 33.6081 37.2909 33.6918 36.923 33.4274C36.5552 33.1631 36.4715 32.6504 36.7359 32.2825C42.2916 24.5546 41.4309 14.0527 34.6893 7.31071C27.1411 -0.237442 14.8592 -0.237442 7.31104 7.31071C-0.237442 14.8592 -0.237442 27.1408 7.31104 34.6893C14.0527 41.4306 24.5549 42.2916 32.2828 36.7356C32.6507 36.4712 33.1631 36.5552 33.4277 36.923C33.6921 37.2909 33.6081 37.8033 33.2403 38.0679C29.677 40.6295 25.3813 42 20.9949 42Z"/>
    <path d="M35.2695 36.0898C35.0536 36.0898 34.8421 36.002 34.6895 35.8495C34.537 35.6967 34.4492 35.4852 34.4492 35.2695C34.4492 35.0536 34.537 34.8421 34.6895 34.6895C34.8421 34.537 35.0536 34.4492 35.2695 34.4492C35.4852 34.4492 35.6967 34.537 35.8495 34.6895C36.002 34.8421 36.0898 35.0536 36.0898 35.2695C36.0898 35.4852 36.002 35.6967 35.8495 35.8495C35.6967 36.002 35.4852 36.0898 35.2695 36.0898Z"/>
    </g>
    <defs>
    <clipPath id="clip0">
    <rect width="42" height="42"/>
    </clipPath>
    </defs>
  </symbol>
    <symbol id="prev-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M23 9H3.0505L10.6895 1.724C11.0895 1.343 11.105 0.71 10.724 0.31C10.3435 -0.0895003 9.7105 -0.1055 9.31 0.2755L0.586 8.5855C0.2085 8.9635 0 9.4655 0 10C0 10.534 0.2085 11.0365 0.6035 11.431L9.3105 19.724C9.504 19.9085 9.752 20 10 20C10.264 20 10.528 19.896 10.7245 19.6895C11.1055 19.2895 11.09 18.657 10.69 18.276L3.019 11H23C23.552 11 24 10.552 24 10C24 9.448 23.552 9 23 9Z"/>
    </symbol>
    <symbol id="next-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 9H20.9495L13.3105 1.724C12.9105 1.343 12.895 0.71 13.276 0.31C13.6565 -0.0895003 14.2895 -0.1055 14.69 0.2755L23.414 8.5855C23.7915 8.9635 24 9.4655 24 10C24 10.534 23.7915 11.0365 23.3965 11.431L14.6895 19.724C14.496 19.9085 14.248 20 14 20C13.736 20 13.472 19.896 13.2755 19.6895C12.8945 19.2895 12.91 18.657 13.31 18.276L20.981 11H1C0.448 11 0 10.552 0 10C0 9.448 0.448 9 1 9Z"/>
    </symbol>
    <symbol id="home-icon-svg" width="35" height="35" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <path d="M34.6061 13.3766L28.9843 8.69532V4.92189C28.9843 4.6318 28.869 4.3536 28.6639 4.14849C28.4588 3.94337 28.1806 3.82814 27.8905 3.82814C27.6004 3.82814 27.3222 3.94337 27.1171 4.14849C26.912 4.3536 26.7968 4.6318 26.7968 4.92189V6.86876L19.5999 0.87501C19.0103 0.383917 18.2672 0.11499 17.4999 0.11499C16.7326 0.11499 15.9895 0.383917 15.3999 0.87501L0.393655 13.3766C0.170293 13.5622 0.0298287 13.829 0.00316337 14.1182C-0.023502 14.4074 0.0658156 14.6954 0.251467 14.9188C0.437119 15.1421 0.703897 15.2826 0.993113 15.3093C1.28233 15.3359 1.57029 15.2466 1.79365 15.0609L16.7999 2.55392C16.9964 2.39022 17.2441 2.30058 17.4999 2.30058C17.7557 2.30058 18.0034 2.39022 18.1999 2.55392L30.6249 12.9063V31.7188C30.6249 32.0088 30.5097 32.287 30.3046 32.4922C30.0994 32.6973 29.8212 32.8125 29.5312 32.8125H24.0624V20.7813C24.0624 19.911 23.7167 19.0764 23.1013 18.4611C22.486 17.8457 21.6514 17.5 20.7812 17.5H14.2187C13.3484 17.5 12.5138 17.8457 11.8985 18.4611C11.2831 19.0764 10.9374 19.911 10.9374 20.7813V32.8125H5.46865C5.17857 32.8125 4.90037 32.6973 4.69526 32.4922C4.49014 32.287 4.3749 32.0088 4.3749 31.7188V18.5938C4.3749 18.3037 4.25967 18.0255 4.05455 17.8204C3.84943 17.6152 3.57123 17.5 3.28115 17.5C2.99107 17.5 2.71287 17.6152 2.50776 17.8204C2.30264 18.0255 2.1874 18.3037 2.1874 18.5938V31.7188C2.1874 32.589 2.53311 33.4236 3.14846 34.039C3.76381 34.6543 4.59841 35 5.46865 35H29.5312C30.4014 35 31.236 34.6543 31.8513 34.039C32.4667 33.4236 32.8124 32.589 32.8124 31.7188V14.7328L33.2062 15.0609C33.4029 15.224 33.6506 15.313 33.9062 15.3125C34.1314 15.313 34.3512 15.2439 34.5357 15.1147C34.7202 14.9855 34.8603 14.8025 34.9369 14.5907C35.0135 14.3789 35.0228 14.1486 34.9636 13.9313C34.9044 13.714 34.7796 13.5203 34.6061 13.3766ZM13.1249 32.8125V20.7813C13.1249 20.4912 13.2401 20.213 13.4453 20.0079C13.6504 19.8027 13.9286 19.6875 14.2187 19.6875H20.7812C21.0712 19.6875 21.3494 19.8027 21.5546 20.0079C21.7597 20.213 21.8749 20.4912 21.8749 20.7813V32.8125H13.1249Z"/>
      <path d="M16.4062 27.3438C17.0103 27.3438 17.5 26.8541 17.5 26.25C17.5 25.6459 17.0103 25.1562 16.4062 25.1562C15.8022 25.1562 15.3125 25.6459 15.3125 26.25C15.3125 26.8541 15.8022 27.3438 16.4062 27.3438Z"/>
      </g>
      <defs>
      <clipPath id="clip0">
      <rect width="35" height="35"/>
      </clipPath>
      </defs>
    </symbol>
    <symbol id="prev-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M23 9H3.0505L10.6895 1.724C11.0895 1.343 11.105 0.71 10.724 0.31C10.3435 -0.0895003 9.7105 -0.1055 9.31 0.2755L0.586 8.5855C0.2085 8.9635 0 9.4655 0 10C0 10.534 0.2085 11.0365 0.6035 11.431L9.3105 19.724C9.504 19.9085 9.752 20 10 20C10.264 20 10.528 19.896 10.7245 19.6895C11.1055 19.2895 11.09 18.657 10.69 18.276L3.019 11H23C23.552 11 24 10.552 24 10C24 9.448 23.552 9 23 9Z"/>
    </symbol>
    <symbol id="next-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 9H20.9495L13.3105 1.724C12.9105 1.343 12.895 0.71 13.276 0.31C13.6565 -0.0895003 14.2895 -0.1055 14.69 0.2755L23.414 8.5855C23.7915 8.9635 24 9.4655 24 10C24 10.534 23.7915 11.0365 23.3965 11.431L14.6895 19.724C14.496 19.9085 14.248 20 14 20C13.736 20 13.472 19.896 13.2755 19.6895C12.8945 19.2895 12.91 18.657 13.31 18.276L20.981 11H1C0.448 11 0 10.552 0 10C0 9.448 0.448 9 1 9Z"/>
    </symbol>
</svg>
<?php 
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $replaceArray = '';
  $e_mailadres = get_field('emailadres', 'options');
  $show_telefoon = get_field('telefoon', 'options');
  $telefoon = trim(str_replace(phone_preg(), $replaceArray, $show_telefoon));
  $fburl = get_field('facebook_url', 'options');
?>
<div class="bdoverlay"></div>
<header class="header">
  <div class="header-inr">
    <div class="hdr-lft">
      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php echo $logo_tag; ?>
        </a>
      </div>
      <div class="hdr-lft-btn">
        <?php 
        if( !empty( $show_telefoon ) ) printf('<div class="hdr-lft-btn-col hdr-lft-tell"><a class="active" href="tel:%s">%s</a></div>', $telefoon, $show_telefoon);
        if( !empty( $e_mailadres ) ) printf('<div class="hdr-lft-btn-col hdr-lft-mail"><a href="mailto:%s">%s</a></div>', $e_mailadres, $e_mailadres);
        ?>
      </div>
      <div class="hdr-humberger show-hide">
          <div class="line-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
    </div>
    <div class="hdr-rgt">
      <div class="hdr-rgt-top">
        <div class="hdr-rgt-top-menu">
          <?php 
            $cmenuOptions = array( 
                'theme_location' => 'cbv_top_menu', 
                'menu_class' => 'reset-list',
                'container' => 'topnav',
                'container_class' => 'topnav'
              );
            wp_nav_menu( $cmenuOptions ); 
          ?>
        </div>
        
        <div class="hdr-rgt-top-social">
          <?php if( !empty($fburl) ): ?>
          <ul class="reset-list">
            <li><a target="_blank" href="<?php echo $fburl; ?>"><i class="fab fa-facebook-f"></i></a></li>
          </ul>
          <?php endif; ?>
        </div>
        
        <div class="hdr-rgt-top-lan">
          <div class="fl-lang reset-slect">
            <div class="fl-lang-cntlr">
              <ul class="reset-list hide-sm">
                <li  class="lang-active"><a href="#">NL</a></li>
                <li class=""><a href="#">EN</a></li>
                <li><a href="#">FR</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="main-nav">
        <?php 
          $cmenuOptions = array( 
              'theme_location' => 'cbv_main_menu', 
              'menu_class' => 'reset-list',
              'container' => 'cmnav',
              'container_class' => 'cmainnav'
            );
          wp_nav_menu( $cmenuOptions ); 
        ?>
      </nav>
    </div>
  </div>
  <div class="mobile-hdr">
    <div class="mobile-hdr-inr">
      <div class="mbl-hdr-top">
        <div class="mbl-hdr-lft">
          <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php echo $logo_tag; ?>
            </a>
          </div>
          <div class="close-btn-wrap">
            <div class="close-btn">
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div class="mbl-menu">
        <div class="mbl-menu-cntlr">
          <?php if( !empty( $show_telefoon ) ) printf('<div class="mbl-hdr-btn hdr-lft-btn-col hdr-lft-tell"><a class="active" href="tel:%s">%s</a></div>', $telefoon, $show_telefoon); ?>
          <div class="mbl-menu-inr">
            <nav class="mbl-top-menu main-nav">
            <?php 
              $cmenuOptions = array( 
                  'theme_location' => 'cbv_main_menu', 
                  'menu_class' => 'reset-list',
                  'container' => 'cmnav',
                  'container_class' => 'cmainnav'
                );
              wp_nav_menu( $cmenuOptions ); 
            ?>
            </nav>
            <div class="mbl-btm-menu">
              <div class="hdr-rgt-top-menu">
                <?php 
                  $cmenuOptions = array( 
                      'theme_location' => 'cbv_top_menu', 
                      'menu_class' => 'reset-list',
                      'container' => 'topnav',
                      'container_class' => 'topnav'
                    );
                  wp_nav_menu( $cmenuOptions ); 
                ?>
              </div>
              <div class="hdr-rgt-top-social">
                <?php if( !empty($fburl) ): ?>
                  <ul class="reset-list">
                    <li><a href="<?php echo $fburl; ?>"><i class="fab fa-facebook-f"></i></a></li>
                  </ul>
                <?php endif; ?>
              </div>
              <div class="hdr-mbl-lan">
                <ul class="reset-list">
                  <li  class="lang-active"><a href="#">NL</a></li>
                  <li><a href="#">EN</a></li>
                  <li><a href="#">FR</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>