<x-layouts.auth>
    <x-slot name="title">Contact Us</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Contact Us">
    </x-slot>

    <!-- FAQ Page -->
    <div class="techwave_fn_contact_page">
					
        <!-- Page Title -->
        <div class="techwave_fn_pagetitle">
            <h2 class="title">Contact Us</h2>
        </div>
        <!-- !Page Title -->
        
        <div class="contactpage">
            <div class="container small">
                
                <p>We value your feedback, inquiries, and suggestions. Please feel free to reach out to us using the contact form below. Our dedicated team is ready to assist you with any questions or concerns you may have.</p>
                <p>Please fill out the form with your contact information and a detailed message, and we will get back to you as soon as possible. Your privacy is important to us, and we will never share your information with third parties.</p>
                
                <div class="fn_contact_form">
                    <form action="/contact/submit" method="post" class="contact_form" id="contact_form" autocomplete="off">
                        <div class="input_list">
                            <ul>
                                <li>
                                    <input id="name" type="text" placeholder="Full Name *" />
                                </li>
                                <li>
                                    <input id="email" type="text" placeholder="Email *" />
                                </li>
                                <li>
                                    <input id="tel" type="text" placeholder="Phone" />
                                </li>
                                <li>
                                    <textarea id="message" placeholder="Your Message *"></textarea>
                                </li>
                                <li>
                                    <div>
                                        <a id="send_message" href="javascript:void(0);" class="techwave_fn_button">
                                            <span>Send Message</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice"><span>! Please Fill Required Fields !</span></div>
                    </form>
                </div>
                <div class="fn__space__30"></div>
                
                <hr data-h="2">
                <div class="fn__space__10"></div>
                <p>In case you prefer to contact us through other means, you can also find our phone number and mailing address listed below. We strive to provide exceptional customer service and ensure that your experience with us is seamless.</p>
                <p>Thank you for choosing us as your trusted resource. We look forward to hearing from you!</p>
                <p>Contact Information:<br>
{{--                Phone: <span class="heading_color">[Insert Phone Number]</span><br>--}}
                Address: <span class="heading_color"><a href="mailto:info - {at} - avks.cloud">info - at - avks.cloud</a></span></p>
                <p>Please note that our office hours are 24/7. While we endeavor to respond to all inquiries promptly, there may be slight delays during weekends and holidays.</p>
                
            </div>
        </div>        
    </div>
    <!-- !FAQ Page -->
</x-layouts.auth>