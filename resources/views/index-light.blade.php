<x-layouts.auth theme="light">
    <x-slot name="title">Home</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Home">
    </x-slot>

    <!-- Home Page -->
    <div class="techwave_fn_home">
        <div class="section_home">
            <div class="section_left">
                
                <!-- Title Shortcode -->
                <div class="techwave_fn_title_holder">
                    <h1 class="title">Unleash Your Creativity with AI</h1>
                    <p class="desc">Generate your ideas into stunning visuals</p>
                </div>
                <!-- !Title Shortcode -->
                
                <!-- Interactive List Shortcode -->
                <div class="techwave_fn_interactive_list">
                    <ul>
                        <li>
                            <div class="item">
                                <a href="{{ url('/image-generation') }}">
                                    <span class="icon">
                                        <img src="{{ URL::asset('build/svg/image.svg') }}" alt="" class="fn__svg">
                                    </span>
                                    <h2 class="title">Image Generation</h2>
                                    <p class="desc">This field of AI combines deep learning algorithms and generative models to create new images that resemble real-world photographs or exhibit creative and imaginative qualities.</p>
                                    <span class="arrow"><img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg"></span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <a href="{{ url('/ai-chat-bot') }}">
                                    <span class="icon">
                                        <img src="{{ URL::asset('build/svg/chat.svg') }}" alt="" class="fn__svg">
                                    </span>
                                    <h2 class="title">AI Chat Bot</h2>
                                    <p class="desc">An AI chatbot, short for artificial intelligence chatbot, is a computer program designed to simulate human-like conversations and provide automated responses to user queries or prompts. </p>
                                    <span class="arrow"><img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg"></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- !Interactive List Shortcode -->
                
            </div>
            <div class="section_right">
                <div class="company_info">
                    <img src="{{ URL::asset('build/img/logo-desktop-full.png') }}" alt="">
                    <p class="fn__animated_text">The official server of TECH-AI, a text-to-image AI where your imagination is the only limit. We’re building market-leading features that will give you greater control over your generations.</p>
                    <hr>
                    <div class="fn__members">
                        <div class="active item">
                            <span class="circle"></span>
                            <span class="text">1,154,694 Online</span>
                        </div>
                        <div class="item">
                            <span class="circle"></span>
                            <span class="text">77,345,912 Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- !Home Page -->

    <x-slot name="scripts">
        <script>
            document.documentElement.setAttribute("data-techwave-skin", "light");
        </script>
    </x-slot>
</x-layouts.auth>