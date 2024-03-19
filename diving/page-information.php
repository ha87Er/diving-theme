<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv">
  <picture class="sub-mv__image">
    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info_pc.jpg" media="(min-width: 768px)" type="image/png">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-info_sp.jpg" alt="魚に囲まれて泳ぐダイバー">
  </picture>
  <h1 class="sub-mv__title">Information</h1>
</div>

<!-- パンくず -->
<?php get_template_part('./parts/breadcrumb') ?>

<div class="lower-information layout-lower-information">
  <div class="lower-information__inner lower-inner inner">
    <div class="lower-information__wrap">
      <div class="lower-information__tabs information-tabs">
        <button class="information-tabs__tab js-tab-switch is-active" data-tab="tab1">
          <span><svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M57.2616 29.3118C57.2551 29.005 57.1709 28.7049 57.0169 28.4395C56.584 27.6852 55.6315 27.2052 54.1881 27.0127C53.3529 26.9012 52.5676 26.7648 51.854 26.607C49.6667 26.1201 47.4252 25.9202 45.1861 26.0126C43.3024 26.0834 41.4237 26.2538 39.5579 26.5231C39.1626 26.5831 38.7035 26.6563 38.1945 26.7379C34.4148 27.3413 26.7248 28.5688 21.9483 27.6226C21.2995 26.3975 21.1877 25.3029 21.6165 24.3661C22.5475 22.3315 25.6997 21.3782 26.8409 21.094C28.1919 23.158 29.9092 24.4282 31.9493 24.8717C35.7439 25.6963 39.239 23.347 39.3861 23.2468C39.4983 23.1701 39.583 23.0594 39.6278 22.931C39.6725 22.8026 39.675 22.6632 39.6349 22.5333C39.5947 22.4034 39.5141 22.2897 39.4047 22.209C39.2953 22.1282 39.1629 22.0846 39.0269 22.0845C38.6821 22.0602 38.3494 21.9469 38.0614 21.7556C37.4261 21.3696 36.9065 20.8196 36.5573 20.1634C35.2569 17.7675 33.3798 16.8743 32.3016 16.5472C34.4961 11.2911 31.6428 7.8556 31.5142 7.70557L31.4967 7.68675C30.8086 6.94548 31.1956 5.60167 31.1991 5.59037C31.2352 5.47208 31.236 5.34585 31.2015 5.22709C31.167 5.10833 31.0987 5.00219 31.0049 4.92163C30.911 4.84106 30.7958 4.78956 30.6732 4.7734C30.5506 4.75725 30.4259 4.77714 30.3144 4.83065C27.2838 6.28138 25.4792 8.98407 25.0949 12.6462C24.9582 14.0364 25.0072 15.4386 25.2407 16.8158C23.7789 16.7177 22.3112 16.7492 20.8549 16.9099C20.2792 16.9664 9.35142 18.1379 4.50135 26.7747C2.36676 30.576 2.16723 35.1397 3.96714 38.9826C5.43537 42.1178 7.86267 44.5304 11.1848 46.1666C10.2139 47.1946 9.41667 48.3738 8.82455 49.658C6.76921 54.1108 2.42455 53.4575 2.24196 53.4276C2.10733 53.4048 1.96894 53.4259 1.84722 53.4878C1.7255 53.5497 1.6269 53.649 1.56596 53.7712C1.50502 53.8934 1.48497 54.032 1.50877 54.1664C1.53258 54.3009 1.59897 54.4241 1.69815 54.518C3.76347 56.4719 6.3982 57.6229 8.96046 57.4419C13.8222 57.0983 17.8017 52.8984 19.2859 51.091C19.8971 50.3367 20.5759 49.6398 21.3138 49.0089C21.3415 49.0117 21.3693 49.0126 21.3972 49.0117C24.4878 48.8147 28.4515 49.0287 28.4816 49.0306C28.5862 49.0379 28.6886 49.043 28.7929 49.0494C27.6089 49.8888 26.6304 50.9855 25.9308 52.2571C24.9081 54.0918 22.2879 57.923 18.2339 57.9503C18.9638 57.3989 19.5344 56.6638 19.8875 55.82C20.2406 54.9762 20.3636 54.0538 20.2438 53.1469C20.236 53.0627 20.2114 52.981 20.1716 52.9064C20.1318 52.8318 20.0776 52.7659 20.012 52.7125C19.9465 52.6591 19.871 52.6193 19.7899 52.5954C19.7088 52.5715 19.6238 52.564 19.5398 52.5733C19.4558 52.5826 19.3744 52.6085 19.3005 52.6496C19.2267 52.6906 19.1617 52.746 19.1094 52.8124C19.0571 52.8788 19.0186 52.955 18.9961 53.0365C18.9735 53.1179 18.9674 53.2031 18.9782 53.2869C19.0984 54.2371 18.8759 55.1991 18.3506 56C17.7819 56.8128 16.9494 57.4036 15.9944 57.6721C15.8551 57.7016 15.7297 57.777 15.6382 57.8862C15.5468 57.9955 15.4946 58.1322 15.49 58.2746C15.4855 58.4169 15.5288 58.5567 15.613 58.6716C15.6972 58.7865 15.8176 58.8698 15.9547 58.9082C16.6951 59.1195 17.4609 59.2284 18.2309 59.2318C22.9339 59.2318 25.8947 54.9374 27.0433 52.8764C27.7117 51.6507 28.6809 50.6151 29.8597 49.8671C30.3059 49.592 30.7741 49.3541 31.2594 49.1557C31.2669 49.1525 31.2731 49.1478 31.2805 49.1444C31.4796 49.1469 31.679 49.1497 31.8758 49.1497C44.7877 49.1497 52.5932 43.8119 55.4879 41.3671C56.1766 40.785 57.0488 40.4649 57.9506 40.4636H59.527C60.188 40.4725 60.8365 40.283 61.3887 39.9196C62.7926 38.9716 62.5977 37.4426 62.2518 36.6336C62.2758 35.6602 62.1211 31.0876 57.2616 29.3118ZM18.3018 50.2831C17.2262 51.5926 13.3686 55.8885 8.88046 56.1711C7.14568 56.2803 5.4766 55.779 3.89919 54.6791C5.71999 54.4636 8.43359 53.5441 9.98615 50.1803C10.0033 50.1412 11.7377 46.2496 14.4528 45.5708C14.6154 45.5287 14.7549 45.4241 14.8407 45.2797C14.9266 45.1354 14.9519 44.9629 14.9112 44.7999C14.8705 44.6369 14.767 44.4966 14.6233 44.4096C14.4796 44.3226 14.3074 44.2958 14.1441 44.3352C13.4552 44.5169 12.8074 44.8287 12.2358 45.2538C8.92752 43.7464 6.53222 41.4573 5.12046 38.4425C3.4941 34.9709 3.67782 30.8423 5.61175 27.3986C10.1567 19.3044 20.8776 18.1871 20.9853 18.1769C20.9881 18.1769 20.9906 18.1756 20.9934 18.1752C20.9962 18.1748 20.9989 18.1752 21.0015 18.1752C21.0286 18.172 23.7155 17.8541 25.9494 18.1735C26.0535 18.1883 26.1596 18.177 26.2583 18.1408C26.357 18.1046 26.4452 18.0446 26.515 17.966C26.5849 17.8875 26.6342 17.7929 26.6587 17.6907C26.6831 17.5884 26.6819 17.4818 26.6551 17.3801C26.3072 15.8602 26.2091 14.2938 26.3647 12.7424C26.664 9.97042 27.8239 7.90021 29.8179 6.57145C29.8168 7.29421 30.0768 7.99303 30.5501 8.53927C30.7329 8.76138 33.199 11.9025 30.8249 16.7166C30.7792 16.8093 30.7567 16.9117 30.7594 17.015C30.7621 17.1183 30.7899 17.2195 30.8405 17.3096C30.891 17.3998 30.9627 17.4763 31.0495 17.5325C31.1362 17.5887 31.2353 17.623 31.3382 17.6323C31.3635 17.6346 33.8758 17.8947 35.4388 20.7717C35.8974 21.6293 36.5787 22.3475 37.4109 22.8506C37.4177 22.8544 37.4245 22.8585 37.4312 22.8627C36.2053 23.4227 34.2241 24.0674 32.2118 23.6261C30.4048 23.2308 28.8816 22.0261 27.6852 20.0444C27.618 19.9334 27.5186 19.8455 27.4002 19.7925C27.2817 19.7395 27.1499 19.724 27.0224 19.7479C26.8131 19.7871 21.8751 20.7478 20.4601 23.8338C19.9895 24.8621 19.9609 25.9855 20.372 27.1862C19.7269 26.9634 19.1372 26.6045 18.6429 26.1338C18.2706 25.769 17.9879 25.3227 17.8173 24.8301C17.7916 24.7502 17.7504 24.6761 17.696 24.6122C17.6416 24.5483 17.5751 24.4958 17.5004 24.4577C17.4256 24.4195 17.344 24.3966 17.2604 24.3901C17.1767 24.3836 17.0925 24.3937 17.0128 24.4199C16.933 24.4461 16.8593 24.4877 16.7957 24.5425C16.7321 24.5973 16.68 24.6641 16.6423 24.7391C16.6046 24.8141 16.5822 24.8958 16.5762 24.9795C16.5702 25.0632 16.5809 25.1473 16.6075 25.2269C16.8387 25.9063 17.2248 26.5226 17.7354 27.027C21.3661 30.7151 32.4441 28.9459 38.3958 27.9955C38.9008 27.9147 39.3558 27.842 39.749 27.7826C41.5696 27.5202 43.4028 27.3542 45.2409 27.2852C47.3692 27.1973 49.4998 27.3871 51.579 27.8499C52.3276 28.0154 53.1487 28.1585 54.0195 28.2746C55.3494 28.4519 55.7115 28.7778 55.9865 29.3041C55.6874 29.4002 55.3786 29.4634 55.0657 29.4923C54.5587 29.5417 54.0476 29.5299 53.5434 29.4569C50.217 29.0393 46.8403 29.5757 43.807 31.0035C41.6957 32.0323 39.8402 33.5185 38.3752 35.3541C36.9925 37.0528 33.1423 41.0091 27.2724 41.056C27.1054 41.0594 26.9464 41.1284 26.8297 41.2479C26.7131 41.3675 26.6481 41.5281 26.6488 41.6952C26.6494 41.8622 26.7157 42.0223 26.8333 42.1409C26.9509 42.2596 27.1104 42.3273 27.2774 42.3294H27.2827C33.6934 42.2784 37.8664 37.9966 39.3627 36.1581C40.7094 34.4686 42.4154 33.1002 44.357 32.1523C47.1658 30.8292 50.2929 30.3321 53.3735 30.719C53.9794 30.8055 54.5935 30.8187 55.2025 30.7584C55.6837 30.7163 56.1564 30.6061 56.6066 30.4312C59.7159 31.4723 60.6322 33.7818 60.8904 35.2915C59.7844 34.5433 58.4877 34.1264 57.1528 34.0899H57.1453C50.0748 33.4737 44.1795 38.8696 43.7241 39.2979C38.4616 43.5341 29.8888 44.6061 29.8034 44.6166C29.791 44.6181 29.7782 44.6202 29.7657 44.6223L25.3262 45.4266C25.0875 45.4627 23.1626 45.811 20.5881 47.9533C19.7535 48.6552 18.9879 49.4354 18.3018 50.2831ZM54.6395 40.4171C52.9324 41.8292 51.0675 43.0386 49.0819 44.0212C49.6026 43.1843 50.0325 42.2942 50.3643 41.366C50.4224 41.2074 50.4151 41.0323 50.3441 40.8791C50.273 40.7259 50.1441 40.6072 49.9855 40.5491C49.907 40.5204 49.8236 40.5074 49.74 40.5108C49.6565 40.5143 49.5745 40.5342 49.4986 40.5694C49.3454 40.6404 49.2267 40.7694 49.1686 40.928C47.8886 44.4229 46.1921 45.2979 46.1495 45.3189C46.1439 45.3216 46.1394 45.3255 46.1339 45.3282C44.9656 45.7808 43.7743 46.1717 42.565 46.4994C43.335 45.5356 43.9169 44.4357 44.2804 43.2568C45.393 39.8466 46.5957 38.6908 46.7734 38.534C48.1531 37.5876 49.6427 36.8122 51.2095 36.2251C50.8226 36.7849 50.4897 37.3801 50.2152 38.0028C50.1785 38.0787 50.1577 38.1613 50.154 38.2455C50.1504 38.3297 50.1639 38.4138 50.1939 38.4926C50.2238 38.5713 50.2696 38.6432 50.3283 38.7037C50.387 38.7642 50.4574 38.8121 50.5352 38.8444C50.6912 38.8916 50.8584 38.8858 51.0107 38.8279C51.163 38.77 51.2918 38.6633 51.377 38.5244C52.4458 36.1457 53.6151 35.5953 53.8028 35.5196C54.8778 35.3226 55.9743 35.2697 57.0632 35.3622C57.0864 35.3643 57.1116 35.3649 57.1351 35.3647H57.1523C56.7537 36.0077 56.4547 36.7072 56.2653 37.4396C55.9511 38.5405 55.3957 39.5576 54.6395 40.4171ZM36.1829 47.6642C36.5771 47.2066 36.9 46.6922 37.1408 46.1383C37.1438 46.1312 37.147 46.1236 37.1498 46.1165C37.1562 46.1005 37.7697 44.5703 38.6369 43.6069C40.4831 42.8904 42.234 41.9491 43.8501 40.8043C43.5558 41.4764 43.2954 42.1629 43.07 42.8611C41.9395 46.3271 39.9001 47.0882 39.6872 47.1591C38.5765 47.3701 37.41 47.5427 36.1829 47.6647V47.6642ZM23.1852 47.6655C24.5795 46.8393 25.4868 46.691 25.5158 46.6867C25.5201 46.6867 25.524 46.6842 25.5284 46.6836C25.5327 46.6831 25.5389 46.6836 25.5444 46.6821L29.6065 45.9461C29.1982 46.6533 28.6401 47.2624 27.9713 47.7308C27.0371 47.6913 25.1314 47.6271 23.1852 47.666V47.6655ZM29.7923 47.8277C30.3689 47.2103 30.8236 46.4894 31.1325 45.7031C32.9818 45.3807 34.806 44.9278 36.5913 44.3478C36.3598 44.7652 36.1524 45.1954 35.9702 45.6365C35.3042 47.145 34.2331 47.6977 33.9372 47.8262C32.616 47.887 31.2351 47.8925 29.7919 47.8283L29.7923 47.8277ZM60.6762 38.8647C60.3345 39.0853 59.9347 39.1988 59.528 39.1906H57.9506C57.5991 39.1917 57.2487 39.2296 56.9051 39.3035C57.1497 38.8143 57.3467 38.3026 57.4932 37.7756C57.8508 36.4768 58.3526 35.8311 58.5714 35.5973C59.5281 35.8711 60.3934 36.3978 61.0759 37.122C61.1884 37.3852 61.5062 38.3045 60.6758 38.8653L60.6762 38.8647Z" fill="#408F95"/>
            <path d="M17.131 22.8518C17.2096 22.8803 17.2931 22.8931 17.3767 22.8893C17.4602 22.8856 17.5422 22.8654 17.6179 22.8299C17.6937 22.7944 17.7616 22.7443 17.818 22.6825C17.8743 22.6207 17.9179 22.5483 17.9463 22.4697C17.9827 22.3693 18.0219 22.2698 18.0639 22.1713C18.0967 22.0944 18.1139 22.0117 18.1147 21.9281C18.1155 21.8445 18.0998 21.7616 18.0686 21.684C18.0373 21.6065 17.9911 21.5359 17.9325 21.4762C17.8739 21.4165 17.8042 21.3689 17.7273 21.3362C17.6503 21.3035 17.5677 21.2862 17.4841 21.2854C17.4005 21.2846 17.3175 21.3003 17.24 21.3316C17.1624 21.3628 17.0918 21.4091 17.0321 21.4676C16.9725 21.5262 16.9249 21.5959 16.8922 21.6729C16.841 21.7931 16.793 21.9147 16.7489 22.0365C16.7205 22.1152 16.7078 22.1986 16.7116 22.2821C16.7154 22.3656 16.7356 22.4476 16.7711 22.5233C16.8066 22.599 16.8566 22.667 16.9184 22.7233C16.9802 22.7797 17.0524 22.8233 17.131 22.8518Z" fill="#408F95"/>
            <path d="M33.7634 35.4389C33.8969 35.4391 34.0269 35.397 34.135 35.3188L34.7441 34.8802C34.8787 34.7805 34.9687 34.6319 34.9944 34.4664C35.0202 34.3009 34.9798 34.132 34.8819 33.9961C34.784 33.8602 34.6365 33.7684 34.4714 33.7405C34.3063 33.7126 34.1368 33.7508 33.9997 33.847L33.3907 34.2855C33.2813 34.3643 33.1998 34.4757 33.1577 34.6037C33.1157 34.7317 33.1154 34.8698 33.1568 34.998C33.1983 35.1262 33.2793 35.238 33.3883 35.3172C33.4973 35.3965 33.6287 35.439 33.7634 35.4389Z" fill="#408F95"/>
            <path d="M22.9229 35.0003C23.2746 35.0003 23.5597 34.7152 23.5597 34.3635C23.5597 34.0118 23.2746 33.7267 22.9229 33.7267C22.5712 33.7267 22.2861 34.0118 22.2861 34.3635C22.2861 34.7152 22.5712 35.0003 22.9229 35.0003Z" fill="#408F95"/>
            <path d="M16.0633 39.8824C15.938 39.8948 15.8192 39.9441 15.7219 40.024C15.6245 40.1039 15.5531 40.2109 15.5166 40.3314C15.4801 40.452 15.4801 40.5806 15.5167 40.7011C15.5533 40.8216 15.6248 40.9286 15.7222 41.0084C15.8196 41.0883 15.9384 41.1375 16.0638 41.1498C16.1891 41.1621 16.3153 41.137 16.4263 41.0776C16.5374 41.0183 16.6283 40.9273 16.6877 40.8162C16.747 40.7052 16.7721 40.579 16.7598 40.4537C16.7516 40.3704 16.7271 40.2896 16.6876 40.2158C16.6482 40.1421 16.5946 40.0768 16.5299 40.0237C16.4652 39.9707 16.3907 39.9309 16.3107 39.9066C16.2306 39.8824 16.1466 39.8741 16.0633 39.8824Z" fill="#408F95"/>
            <path d="M12.786 32.522C12.6607 32.5344 12.5418 32.5837 12.4445 32.6636C12.3472 32.7435 12.2758 32.8505 12.2393 32.9711C12.2028 33.0916 12.2028 33.2202 12.2394 33.3407C12.276 33.4612 12.3475 33.5682 12.4449 33.648C12.5422 33.7279 12.6611 33.7771 12.7864 33.7894C12.9117 33.8017 13.0379 33.7766 13.149 33.7173C13.26 33.6579 13.351 33.5669 13.4103 33.4558C13.4697 33.3448 13.4948 33.2186 13.4824 33.0933C13.4743 33.01 13.4498 32.9292 13.4103 32.8554C13.3709 32.7816 13.3173 32.7163 13.2526 32.6633C13.1879 32.6102 13.1134 32.5704 13.0334 32.5462C12.9533 32.5219 12.8692 32.5137 12.786 32.522Z" fill="#408F95"/>
            </svg>
            ライセンス<br class="u-mobile">講習
          </span>
        </button>
        <button class="information-tabs__tab js-tab-switch" data-tab="tab2">
            <span><svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M34.5028 33.3605C34.4581 33.2014 34.3521 33.0666 34.2081 32.9855C34.0642 32.9044 33.8939 32.8838 33.7347 32.928C33.6337 32.9564 33.5323 32.984 33.4305 33.0107C33.3488 33.0291 33.2717 33.0638 33.2037 33.1126C33.1357 33.1615 33.0783 33.2236 33.0349 33.2951C32.9914 33.3667 32.9628 33.4462 32.9508 33.5291C32.9388 33.6119 32.9436 33.6963 32.9649 33.7773C32.9862 33.8582 33.0236 33.9341 33.0749 34.0002C33.1262 34.0664 33.1902 34.1216 33.2633 34.1624C33.3364 34.2033 33.4169 34.229 33.5001 34.2381C33.5834 34.2471 33.6676 34.2393 33.7477 34.2151C33.8559 34.1866 33.9634 34.1574 34.0703 34.1276C34.2292 34.0831 34.364 33.9773 34.4451 33.8335C34.5262 33.6897 34.5469 33.5196 34.5028 33.3605Z" fill="#408F95"/>
              <path d="M61.0541 37.2302C58.4859 37.8711 55.795 37.8305 53.2473 37.1126C53.6608 35.8562 53.8967 34.5482 53.9481 33.2266C54.1208 28.5631 52.0234 24.714 47.8825 22.0952C45.9507 20.8879 43.8228 20.0276 41.5947 19.5533C40.4088 19.2965 39.2433 19.1207 38.3419 19.0065C38.536 18.2632 38.7791 17.5335 39.0697 16.8223C39.1183 16.7113 39.1335 16.5885 39.1135 16.469C39.0934 16.3495 39.039 16.2384 38.9567 16.1494C38.8745 16.0603 38.7682 15.9972 38.6506 15.9676C38.5331 15.9381 38.4095 15.9435 38.295 15.9831C35.312 17.0239 32.6826 18.8838 30.7077 21.3498C28.2393 21.6312 26.3176 22.6283 25.1489 24.2367C25.1443 24.2431 25.1391 24.2506 25.1346 24.2572C25.0125 24.4397 22.3069 28.3893 17.5834 27.9123C19.156 26.4485 22.005 23.2183 22.713 18.5048C23.6477 12.2857 21.9594 7.79125 20.8844 5.68408C22.8907 6.37838 26.5781 8.36788 28.2142 13.8385C28.2808 14.0881 29.0325 16.6809 31.9481 18.4192C32.0901 18.5038 32.2598 18.5285 32.4201 18.488C32.5803 18.4474 32.7179 18.3449 32.8025 18.2029C32.8871 18.0609 32.9119 17.8912 32.8713 17.7309C32.8308 17.5707 32.7282 17.4332 32.5863 17.3485C30.0477 15.8354 29.424 13.5385 29.4186 13.5179C29.4166 13.5094 29.4142 13.5007 29.4116 13.4922C26.8859 5.02962 19.9598 4.12872 19.6661 4.095C19.5461 4.08114 19.4246 4.10244 19.3165 4.1563C19.2084 4.21017 19.1182 4.29429 19.057 4.39843C18.9958 4.50257 18.9661 4.62225 18.9717 4.74292C18.9772 4.86359 19.0177 4.98006 19.0881 5.07817C19.1252 5.12875 22.6971 10.2225 21.4805 18.32C20.5892 24.2509 15.8514 27.7515 15.8043 27.7863C15.7083 27.8557 15.634 27.951 15.5902 28.0611C15.5464 28.1712 15.5348 28.2914 15.557 28.4078C15.5791 28.5242 15.6339 28.6319 15.715 28.7183C15.7962 28.8046 15.9002 28.866 16.015 28.8953C16.7734 29.0923 17.5536 29.1931 18.3371 29.1955C23.1327 29.1955 25.9599 25.2545 26.161 24.9645C26.937 23.8987 28.1012 23.1755 29.6286 22.8032C28.2225 24.9078 27.1744 27.2307 26.5269 29.6776C26.2774 30.6835 25.8562 31.6387 25.2818 32.5013C24.8967 33.0793 24.4365 33.6035 23.9132 34.0602C20.4201 34.0682 16.9305 33.8381 13.4687 33.3715C13.4598 33.3701 13.4509 33.369 13.442 33.3681C4.67762 32.4341 1.38661 37.1064 1.25079 37.3058C1.19763 37.3838 1.16289 37.4729 1.14918 37.5663C1.13548 37.6597 1.14317 37.755 1.17167 37.845C2.15909 40.9631 3.76025 43.8521 5.88092 46.3421C8.15003 50.3161 12.5239 53.4879 15.8036 55.4528C19.4826 57.6567 24.7748 58.9094 28.0123 58.9094C31.7604 58.9007 35.454 58.0111 38.7951 56.3124C39.9893 57.1143 42.0496 58.0673 45.1044 58.0673C46.4889 58.0571 47.8673 57.8829 49.2108 57.5485C49.3262 57.5204 49.4311 57.4599 49.5132 57.3743C49.5954 57.2887 49.6515 57.1814 49.6748 57.065C49.6982 56.9487 49.6878 56.828 49.645 56.7173C49.6022 56.6066 49.5288 56.5104 49.4332 56.44C49.4184 56.4291 47.9373 55.3218 46.7348 53.1008C46.6959 53.0288 46.6431 52.9651 46.5796 52.9135C46.5161 52.8618 46.443 52.8232 46.3646 52.7998C46.2861 52.7764 46.2038 52.7687 46.1224 52.7771C46.041 52.7855 45.962 52.8099 45.89 52.8489C45.818 52.8878 45.7544 52.9406 45.7027 53.0041C45.6511 53.0677 45.6125 53.1408 45.5892 53.2192C45.5658 53.2977 45.5582 53.38 45.5667 53.4614C45.5751 53.5428 45.5996 53.6218 45.6386 53.6938C46.2052 54.7471 46.9125 55.7185 47.7409 56.5812C44.035 57.2268 41.5447 56.4458 40.0697 55.6307C45.0608 52.7921 48.3685 48.8569 49.7606 46.9823C49.9998 46.9949 50.2435 47.0024 50.4918 47.0024C52.0623 47.0168 53.6192 46.7109 55.0674 46.1034C58.1394 44.7856 60.4119 42.0695 61.8214 38.0307C61.8592 37.9221 61.8662 37.8052 61.8417 37.6929C61.8173 37.5806 61.7622 37.4772 61.6826 37.3942C61.6031 37.3113 61.5021 37.2519 61.391 37.2227C61.2798 37.1935 61.1627 37.1956 61.0526 37.2287L61.0541 37.2302ZM28.0113 57.6635C25.5812 57.6635 19.9347 56.4751 16.4442 54.3838C13.3959 52.5576 9.37186 49.6625 7.17946 46.0912C8.28474 45.1927 12.1111 42.8033 18.3981 46.2746C18.5374 46.3487 21.8664 48.109 26.8583 48.9488C31.4135 49.715 38.2399 49.8061 45.0375 45.9672C46.0922 46.3745 47.1884 46.6653 48.3064 46.8342C45.6562 50.2067 38.5946 57.6635 28.0113 57.6635ZM54.5859 44.9559C50.1533 46.8633 45.3011 44.7291 45.2526 44.7072C45.1625 44.6657 45.0636 44.6467 44.9646 44.6518C44.8655 44.6569 44.7691 44.686 44.6837 44.7365C38.1338 48.5382 31.5106 48.4609 27.1078 47.7269C22.3061 46.9265 19.0185 45.1931 18.9934 45.1797C14.6598 42.787 11.3593 42.9944 9.35278 43.5895C8.29763 43.8963 7.3111 44.4026 6.44663 45.0809C4.70525 42.8956 3.3566 40.4245 2.46076 37.7778C3.21176 36.8924 6.32489 33.8657 13.2969 34.605C13.8565 34.6885 23.1626 36.0384 31.0261 34.7825C31.1873 34.7542 31.3308 34.6636 31.4258 34.5304C31.5208 34.3971 31.5596 34.2318 31.5338 34.0702C31.508 33.9086 31.4197 33.7637 31.2879 33.6666C31.1561 33.5696 30.9915 33.5283 30.8295 33.5516C29.1282 33.8124 27.4126 33.9698 25.6922 34.023C25.9134 33.7594 26.1209 33.4845 26.3137 33.1995C26.9684 32.2184 27.4489 31.1316 27.7341 29.9871C28.2984 27.7939 30.6073 20.7314 37.4263 17.6672C36.5419 20.3659 35.1885 26.4196 39.4116 29.6569C38.6606 30.6182 37.561 31.4301 36.1154 32.0811C36.0407 32.1147 35.9735 32.1627 35.9174 32.2223C35.8613 32.2819 35.8175 32.3519 35.7885 32.4284C35.7595 32.505 35.7459 32.5865 35.7484 32.6683C35.7509 32.7501 35.7694 32.8306 35.8031 32.9052C35.8367 32.9798 35.8846 33.0471 35.9442 33.1031C36.0038 33.1592 36.0739 33.203 36.1504 33.232C36.2269 33.261 36.3084 33.2747 36.3902 33.2722C36.472 33.2697 36.5525 33.2511 36.6271 33.2175C39.4419 31.9501 41.1411 30.1077 41.6772 27.7413C41.6794 27.7319 41.6814 27.7228 41.6829 27.7128C41.7014 27.6112 42.0987 25.2009 39.6919 23.2894C39.5624 23.1866 39.3974 23.1395 39.2332 23.1583C39.069 23.1772 38.9189 23.2605 38.8161 23.39C38.7133 23.5194 38.6661 23.6844 38.685 23.8487C38.7038 24.0129 38.7872 24.1629 38.9166 24.2657C40.6716 25.6592 40.4794 27.3301 40.4574 27.4849C40.3692 27.8665 40.2402 28.2375 40.0725 28.5914C37.466 26.4913 37.534 22.8942 38.0576 20.2276C38.9496 20.3379 40.1359 20.5128 41.3394 20.7739C41.346 20.7755 41.3536 20.777 41.3605 20.7783C43.4453 21.2311 45.4365 22.0397 47.2467 23.1686C51.0234 25.5697 52.8585 28.9381 52.7012 33.1802C52.6547 34.3784 52.4417 35.5642 52.0685 36.7036C51.5886 36.5093 51.1216 36.2847 50.6702 36.0312C50.5261 35.9501 50.3557 35.9296 50.1964 35.9741C50.0372 36.0187 49.9022 36.1247 49.8211 36.2688C49.74 36.4129 49.7195 36.5834 49.7641 36.7426C49.8086 36.9018 49.9146 37.0368 50.0588 37.1179C54.085 39.3802 58.2526 39.045 60.236 38.6907C58.9429 41.792 57.0453 43.8971 54.5859 44.9555V44.9559Z" fill="#408F95"/>
              <path d="M19.7411 38.1344L18.9926 38.4341C18.9161 38.4642 18.8464 38.5091 18.7874 38.5662C18.7284 38.6233 18.6812 38.6915 18.6487 38.767C18.6161 38.8424 18.5988 38.9235 18.5977 39.0056C18.5966 39.0877 18.6118 39.1693 18.6423 39.2455C18.6728 39.3218 18.7181 39.3912 18.7756 39.4499C18.8331 39.5086 18.9016 39.5554 18.9772 39.5875C19.0528 39.6196 19.134 39.6364 19.2161 39.637C19.2983 39.6376 19.3797 39.622 19.4558 39.591L20.2044 39.2914C20.2808 39.2613 20.3505 39.2164 20.4096 39.1593C20.4686 39.1022 20.5157 39.0339 20.5483 38.9585C20.5808 38.8831 20.5981 38.802 20.5992 38.7199C20.6003 38.6378 20.5852 38.5562 20.5546 38.48C20.5241 38.4037 20.4788 38.3342 20.4213 38.2756C20.3639 38.2169 20.2953 38.1701 20.2197 38.138C20.1441 38.1059 20.0629 38.0891 19.9808 38.0885C19.8987 38.0878 19.8172 38.1035 19.7411 38.1344Z" fill="#408F95"/>
              <path d="M32.4096 39.1187C32.4746 38.9686 32.478 38.799 32.419 38.6464C32.3601 38.4938 32.2435 38.3705 32.0945 38.3031C31.9455 38.2357 31.7759 38.2295 31.6224 38.286C31.4689 38.3425 31.3437 38.457 31.2739 38.6049C31.2163 38.7317 29.891 41.7364 32.2459 44.2444C32.3633 44.3573 32.5183 44.4227 32.6811 44.4279C32.8439 44.433 33.0028 44.3775 33.127 44.2721C33.1867 44.2162 33.2349 44.149 33.2686 44.0744C33.3023 43.9998 33.321 43.9193 33.3236 43.8375C33.3262 43.7556 33.3126 43.6741 33.2836 43.5976C33.2547 43.521 33.2109 43.4509 33.1548 43.3913C31.3827 41.5039 32.3643 39.2207 32.4096 39.1187Z" fill="#408F95"/>
              <path d="M35.962 38.4285C36.0302 38.278 36.0357 38.1065 35.9775 37.9518C35.9192 37.7971 35.8018 37.672 35.6513 37.6038C35.5007 37.5356 35.3292 37.5301 35.1745 37.5884C35.0199 37.6466 34.8947 37.764 34.8265 37.9145C34.7691 38.0413 33.4437 41.046 35.7988 43.554C35.9216 43.6848 36.4473 43.7793 36.6798 43.5818C36.7407 43.5265 36.7899 43.4595 36.8244 43.3849C36.8588 43.3102 36.8779 43.2294 36.8805 43.1472C36.8831 43.065 36.8692 42.9831 36.8395 42.9065C36.8097 42.8298 36.7649 42.7599 36.7076 42.7009C34.9362 40.8144 35.9161 38.5327 35.962 38.4285Z" fill="#408F95"/>
              <path d="M39.1683 37.0999C39.2334 36.9498 39.2368 36.7802 39.1778 36.6276C39.1189 36.475 39.0023 36.3517 38.8533 36.2843C38.7043 36.2169 38.5347 36.2107 38.3812 36.2672C38.2277 36.3237 38.1025 36.4382 38.0327 36.5861C37.975 36.7129 36.6498 39.7176 39.0047 42.2257C39.1274 42.3566 39.6486 42.4666 39.8856 42.2535C39.9459 42.1979 39.9944 42.1308 40.0285 42.0562C40.0625 41.9815 40.0814 41.9009 40.084 41.8189C40.0866 41.7369 40.0728 41.6553 40.0435 41.5786C40.0143 41.502 39.97 41.432 39.9134 41.3726C38.1405 39.4843 39.1242 37.1993 39.1683 37.0999Z" fill="#408F95"/>
              </svg>
              ファン<br class="u-mobile">ダイビング
            </span>
        </button>
        <button class="information-tabs__tab js-tab-switch" data-tab="tab3">
            <span>
              <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.8257 41.024C16.2331 41.0108 15.6545 40.8408 15.1489 40.5312L4.81293 34.5024C4.34535 34.3086 3.94574 33.9804 3.6646 33.5595C3.38345 33.1386 3.2334 32.6438 3.2334 32.1376C3.2334 31.6315 3.38345 31.1366 3.6646 30.7157C3.94574 30.2948 4.34535 29.9667 4.81293 29.7728L9.01773 27.3408C10.8771 26.325 12.8518 25.5365 14.8993 24.992L22.3233 23.2064C24.4167 22.7674 26.5679 22.6745 28.6913 22.9312L38.2273 24.3648C39.9298 24.5125 41.6361 24.1279 43.1105 23.264L46.5025 20.9792C46.7139 20.8366 46.9732 20.7838 47.2234 20.8325C47.4737 20.8811 47.6944 21.0271 47.8369 21.2384C47.9795 21.4497 48.0323 21.7091 47.9837 21.9593C47.9351 22.2096 47.7891 22.4302 47.5777 22.5728L44.1601 24.8576C42.294 25.9816 40.1124 26.4669 37.9457 26.24L28.4097 24.832C26.5313 24.6154 24.6305 24.6975 22.7777 25.0752L15.3601 26.88C13.492 27.3806 11.6897 28.1003 9.99053 29.024L5.76013 31.4368C5.60527 31.495 5.46648 31.5892 5.3552 31.7116C5.24392 31.834 5.16335 31.9811 5.12013 32.1408C5.16335 32.3005 5.24392 32.4476 5.3552 32.57C5.46648 32.6924 5.60527 32.7866 5.76013 32.8448L16.1025 38.8736C16.2314 38.9736 16.3816 39.0424 16.5415 39.0746C16.7014 39.1068 16.8666 39.1016 17.0241 39.0592C17.1424 38.947 17.2329 38.8087 17.2885 38.6554C17.344 38.5021 17.3631 38.338 17.3441 38.176L17.4465 31.4432C17.4465 31.1886 17.5477 30.9444 17.7277 30.7644C17.9077 30.5844 18.1519 30.4832 18.4065 30.4832C18.6611 30.4832 18.9053 30.5844 19.0854 30.7644C19.2654 30.9444 19.3665 31.1886 19.3665 31.4432L19.2833 38.2016C19.3176 38.7037 19.217 39.2058 18.9919 39.6559C18.7668 40.106 18.4255 40.4878 18.0033 40.7616C17.6405 40.9507 17.2345 41.0412 16.8257 41.024Z" fill="#408F95"/>
              <path d="M54.6371 32.7296C54.1172 32.731 53.602 32.631 53.1203 32.4352L51.4755 31.7952C49.8883 31.1552 47.4371 30.0672 45.9971 29.3632L43.4371 28.0832C43.3178 28.0317 43.2101 27.9565 43.1206 27.8621C43.0312 27.7678 42.9619 27.6562 42.9168 27.5342C42.8718 27.4123 42.852 27.2824 42.8587 27.1526C42.8653 27.0227 42.8983 26.8956 42.9556 26.7789C43.0129 26.6621 43.0933 26.5583 43.1919 26.4735C43.2905 26.3888 43.4053 26.325 43.5294 26.286C43.6534 26.247 43.784 26.2336 43.9134 26.2466C44.0428 26.2596 44.1682 26.2987 44.2819 26.3616L46.8419 27.6416C48.2435 28.3264 50.6435 29.3952 52.1859 30.016L53.8307 30.656C54.0866 30.7592 54.3604 30.8109 54.6363 30.8081C54.9121 30.8054 55.1848 30.7483 55.4386 30.6401C55.6924 30.532 55.9224 30.3748 56.1154 30.1777C56.3085 29.9805 56.4607 29.7473 56.5635 29.4912L58.8803 23.7312C58.9235 23.609 58.9909 23.4968 59.0786 23.4013C59.1662 23.3059 59.2723 23.2292 59.3904 23.1758C59.5085 23.1225 59.6362 23.0936 59.7658 23.0909C59.8954 23.0882 60.0242 23.1118 60.1444 23.1602C60.2646 23.2087 60.3737 23.281 60.4653 23.3727C60.5568 23.4645 60.6288 23.5738 60.6769 23.6941C60.7251 23.8145 60.7484 23.9433 60.7454 24.0729C60.7424 24.2024 60.7132 24.33 60.6595 24.448L58.3427 30.208C58.0446 30.9483 57.5331 31.5833 56.8733 32.0323C56.2135 32.4812 55.4352 32.724 54.6371 32.7296Z" fill="#408F95"/>
              <path d="M59.5197 42.7904C59.3406 42.7872 59.1659 42.734 59.0155 42.6367C58.8651 42.5394 58.7449 42.402 58.6685 42.24L56.5181 37.4464C56.2511 36.9015 55.8036 36.466 55.2517 36.2139C54.6997 35.9619 54.0775 35.9089 53.4909 36.064L53.0109 36.2112C51.3981 36.6976 48.7485 37.4912 47.1165 37.92L43.2765 38.976C43.034 39.0355 42.7779 38.9981 42.5625 38.8718C42.347 38.7456 42.1893 38.5404 42.1227 38.2997C42.0561 38.0591 42.0858 37.802 42.2057 37.5829C42.3255 37.3639 42.5259 37.2001 42.7645 37.1264L46.6045 36.0704C48.2301 35.6224 50.8541 34.8608 52.4605 34.3744L52.9405 34.2272C53.9673 33.9496 55.0588 34.0395 56.0263 34.4812C56.9939 34.9229 57.7768 35.6888 58.2397 36.6464L60.3901 41.44C60.4549 41.5857 60.4825 41.7452 60.4702 41.9041C60.458 42.0631 60.4063 42.2165 60.32 42.3505C60.2336 42.4845 60.1152 42.5949 59.9755 42.6717C59.8358 42.7485 59.6791 42.7893 59.5197 42.7904Z" fill="#408F95"/>
              <path d="M31.4239 43.2704C30.6452 43.2788 29.868 43.1993 29.1071 43.0336L20.8575 41.1136C20.6097 41.055 20.3953 40.9004 20.2615 40.6838C20.1276 40.4671 20.0853 40.2062 20.1439 39.9584C20.2025 39.7106 20.3571 39.4962 20.5737 39.3623C20.7904 39.2285 21.0513 39.1862 21.2991 39.2448L29.5487 41.1648C31.3113 41.491 33.1273 41.3767 34.8351 40.832L36.9023 40.0576C38.7627 39.3856 40.7754 39.2547 42.7071 39.68L45.0303 40.3904C45.2756 40.4659 45.4808 40.6358 45.6008 40.8626C45.7208 41.0895 45.7458 41.3547 45.6703 41.6C45.5948 41.8453 45.4249 42.0505 45.198 42.1705C44.9712 42.2905 44.706 42.3155 44.4607 42.24L42.1375 41.5296C40.6113 41.2328 39.0335 41.3499 37.5679 41.8688L35.5071 42.624C34.1919 43.0668 32.8116 43.2854 31.4239 43.2704Z" fill="#408F95"/>
              <path d="M11.5137 32.8256C12.2418 32.8256 12.8321 32.2353 12.8321 31.5072C12.8321 30.7791 12.2418 30.1888 11.5137 30.1888C10.7856 30.1888 10.1953 30.7791 10.1953 31.5072C10.1953 32.2353 10.7856 32.8256 11.5137 32.8256Z" fill="#408F95"/>
              <path d="M24.1029 36.1344C23.8852 36.1353 23.6737 36.0622 23.5031 35.9272C23.3324 35.7921 23.2127 35.603 23.1636 35.391C23.1145 35.179 23.1389 34.9566 23.2328 34.7602C23.3267 34.5639 23.4846 34.4053 23.6805 34.3104L27.3797 32.5248H24.9605H21.6773C21.5512 32.524 21.4265 32.4983 21.3104 32.4493C21.1942 32.4003 21.0889 32.3289 21.0003 32.2391C20.9118 32.1494 20.8417 32.0431 20.7943 31.9263C20.7468 31.8095 20.7228 31.6845 20.7237 31.5584C20.7228 31.4319 20.7473 31.3064 20.7957 31.1895C20.8441 31.0725 20.9155 30.9665 21.0055 30.8776C21.0956 30.7887 21.2026 30.7188 21.3202 30.6719C21.4378 30.6251 21.5635 30.6022 21.6901 30.6048H24.9733C25.9781 30.6048 27.6293 30.6048 28.6341 30.6048H29.8309C30.8677 30.6048 31.4309 30.9248 31.5845 31.5712C31.7381 32.2176 31.3477 32.7744 30.4389 33.216L24.5573 36.0576C24.4143 36.1197 24.2583 36.1461 24.1029 36.1344Z" fill="#408F95"/>
              </svg>
              体験<br class="u-mobile">ダイビング
            </span>
        </button>
      </div>
      <div class="lower-information__cards information-cards">
        <div class="information-cards__card information-card  js-tab-cts is-active" data-tab="tab1">
          <div class="information-card__wrap">
            <div class="information-card__text-block">
              <div class="information-card__title">ライセンス講習</div>
              <div class="information-card__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</div>
            </div>
            <div class="information-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_image1.jpg" alt="集団で泳ぐダイバー" width="297" height="189" loading="lazy">
            </div>
          </div>
        </div>
        <div class="lower-information__card information-card js-tab-cts" data-tab="tab2">
          <div class="information-card__wrap">
            <div class="information-card__text-block">
              <div class="information-card__title">ファンダイビング</div>
              <div class="information-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</div>
            </div>
            <div class="information-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_image2.jpg" alt="魚の大群" width="297" height="189" loading="lazy">
            </div>
          </div>
        </div>
        <div class="lower-information__card information-card js-tab-cts" data-tab="tab3">
          <div class="information-card__wrap">
            <div class="information-card__text-block">
              <div class="information-card__title">体験ダイビング</div>
              <div class="information-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</div>
            </div>
            <div class="information-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_image3.jpg" alt="尾びれが黄色い体が白黒の縞模様の魚" width="297" height="189" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="contact layout-contact layout-contact--lower">
  <div class="contact__inner inner">
    <div class="contact__block">
      <div class="contact__information">
        <div class="contact__information-title">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" alt="CodeUps">
        </div>
        <div class="contact__row-wrap">
          <div class="contact__description">
            <p class="contact__address">沖縄県那覇市1-1</p>
            <p class="contact__tel"><a href="tel:0120-000-0000">TEL:0120-000-0000</a></p>
            <p class="contact__sales">営業時間:8:30-19:00</p>
            <p class="contact__holiday">定休日:毎週火曜日</p>
          </div>
          <div class="contact__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.3799814610384!2d127.71739497508827!3d26.216840277068698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bfe6cf4db67%3A0xc0899fbab29e4f8b!2z6aaW6YeM5Z-O!5e0!3m2!1sja!2sjp!4v1705631042528!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__content">
        <div class="contact__content-wrap">
          <div class="contact__title">
            <div class="title__en title__en--large">Contact</div>
            <h2 class="title__ja title__ja--large">お問い合わせ</h2>
          </div>
          <p class="contact__text">ご予約・お問い合わせはコチラ</p>
          <div class="contact__button">
            <a href="./page-contact.html" class="button">
              <span>Contact us</span>
            </a>
          </div>
       </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>