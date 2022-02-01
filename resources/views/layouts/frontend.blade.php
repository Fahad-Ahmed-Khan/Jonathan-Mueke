<!doctype html>
<html class="no-js" lang="zxx">
  @include('includes.frontend.header')
  @livewireStyles
  <body>
      @include('includes.frontend.side-menu')
      
      @yield('content')

      <!--===**** Donate modal form start***====== -->        
        <livewire:frontend.modal-forms.volunteer />
        <livewire:frontend.modal-forms.engage />
        <livewire:frontend.modal-forms.donate.donations />
        <livewire:frontend.modal-forms.subscribe.subscription />
      <!--=====**** Donate modal form end***======= -->
      @include('includes.frontend.script')      
      @livewireScripts

      <script>
        $(document).ready(function () {
          document.cookie ="red";
            $('body').ihavecookies({
                title: "Cookies &amp; Privacy",
                message: "This website uses cookies to ensure you get the best experience on our website",
                expires: "30" ,
                link: "http://jmueke.zalegoinstitute.ac.ke/",
                delay: "5000",
                moreInfoLabel: "More information",
                acceptBtnLabel: "Accept Cookie"
            }).;
            $('body').on('click','#gdpr-cookie-close',function (e) {
                e.preventDefault();
                $(this).parent().remove();
            });
        });
    </script>

<call-us 
     style="position: fixed; right: 20px; bottom: 20px; 
         font-family: Arial; 
         z-index: 99999; 
         --call-us-form-header-background:#d97e17;
         --call-us-main-button-background:#d63005;
         --call-us-client-text-color:#d4d4d4;
         --call-us-agent-text-color:#eeeeee;
         --call-us-form-height:330px;" 
     id="wp-live-chat-by-3CX" 
     channel-url="https://zalego.elastix.com" 
     files-url="https://zalego.elastix.com" 
     minimized="true" 
     animation-style="none" 
     party="festus" 
     minimized-style="BubbleRight" 
     allow-call="true" 
     allow-video="true" 
     allow-soundnotifications="true" 
     enable-onmobile="true" 
     offline-enabled="true" 
     enable="true" 
     ignore-queueownership="true" 
     authentication="both" 
     operator-name="Support" 
     show-operator-actual-name="true" 
     channel="phone" 
     aknowledge-received="true" 
     gdpr-enabled="true" 
     gdpr-message="I agree that my personal data to be processed and for the use of cookies in order to engage in a chat processed by COMPANY, for the purpose of Chat/Support for the time of  30 day(s) as per the GDPR." 
     message-userinfo-format="both" 
     message-dateformat="both" 
     start-chat-button-text="Chat" 
     window-title="Live Chat & Talk" 
     button-icon-type="Default" 
     invite-message="Hello! How can we help you today?" 
     authentication-message="Could we have your name and email?" 
     unavailable-message="We are away, leave us a message!" 
     offline-finish-message="We received your message and we'll contact you soon." 
     ending-message="Your session is over. Please feel free to contact us again!" 
     greeting-visibility="none" 
     greeting-offline-visibility="none" 
     chat-delay="2000" 
     offline-name-message="Could we have your name?" 
     offline-email-message="Could we have your email?" 
     offline-form-invalid-name="I'm sorry, the provided name is not valid." 
     offline-form-maximum-characters-reached="Maximum characters reached" 
     offline-form-invalid-email="I'm sorry, that doesn't look like an email address. Can you try again?" 
     >
</call-us>


<script defer src="https://cdn.3cx.com/livechat/v1/callus.js" id="tcx-callus-js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

	<!--<script type="text/javascript">
	$(document).ready(function(){
		$('.page-link').click(function(){
			$('.pagination').find('.active').next().addClass('active');
			$('.pagination').find('.active').previous().removeClass('active');
			$('.content').find('.index').next().addClass('index');
			$('.content').find('.index').next().removeClass('index');
		})
	});
</script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.4/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/assets/js/jQuery.paginate.js"></script>
	<!-- Pagination Js -->
<script src="/frontend/assets/js/pagination.js"></script>
	  <script>
        $('#pagination-1').paginate({
        	items_per_page: 2
        });

		$('#pagination-2').paginate({
        	items_per_page: 3
        });
    </script>
    <script>
      (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://jmueke.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
      })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </body>
</html>