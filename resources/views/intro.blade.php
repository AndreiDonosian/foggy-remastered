<x-layouts.general>
    <x-slot name="title">Intro</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Intro">
    </x-slot>

    <div class="techwave_fn_intro">
        <div class="first"><img src="{{ URL::asset('build/img/intro/first.png') }}" alt=""></div>
        <div class="txt">
            <h3>AI Admin Panel</h3>
            <p>in themeforest market</p>
        </div>
        <div class="mac"><img src="{{ URL::asset('build/img/intro/mac.png') }}" alt=""></div>
        <div class="txt_unlim">
            <div class="TickerNews"><div class="ti_wrapper"><div class="ti_slide"><div class="marquee" data-speed="30">
                <div class="item">Generate Images &mdash;</div>
                <div class="item">&nbsp;AI Chat Bot &mdash;</div>
                <div class="item">&nbsp;The Best AI HTML Template Ever &mdash;</div>
                <div class="item">&nbsp;By Freniy Team &mdash;</div>
            </div></div></div></div>
        </div>
        <div class="fn__center_title" id="img_gen">
            <div class="lines">
                <span class="l"></span>
                <span class="c"></span>
                <span class="r"></span>
            </div>
            <div class="text">
                <h3 class="fn__animated_text">It Has Everything For AI Image Generation Platform</h3>
            </div>
        </div>
        <div class="generation"><img src="{{ URL::asset('build/img/intro/img-generation.png') }}" alt=""></div>
        <div class="or"><h1><span>Or / Or / Or</span></h1></div>
        <div class="fn__center_title">
            <div class="text">
                <h3 class="fn__animated_text">You could use it for AI Chat Bot platform</h3>
            </div>
        </div>
        <div class="livechat">
            <div class="fn__chatbot">
                <div class="chat__list">
                    <div class="chat__item active">
                        <div class="chat__box your__chat">
                            <div class="author"><span>You</span></div>
                            <div class="chat">
                                <p>What is a chat bot?</p>
                            </div>
                        </div>
                        <div class="chat__box bot__chat">
                            <div class="author"><span>Bot</span></div>
                            <div class="chat">
                                <p>At the most basic level, a chatbot is a computer program that simulates and processes human conversation (either written or spoken), allowing humans to interact with digital devices as if they were communicating with a real person. Chatbots can be as simple as rudimentary programs that answer a simple query with a single-line response, or as sophisticated as digital assistants that learn and evolve to deliver increasing levels of personalization as they gather and process information.</p>
                            </div>
                        </div>
                        <div class="chat__box your__chat">
                            <div class="author"><span>You</span></div>
                            <div class="chat">
                                <p>How do chatbots work?</p>
                            </div>
                        </div>
                        <div class="chat__box bot__chat">
                            <div class="author"><span>Bot</span></div>
                            <div class="chat">
                                <p>Chatbots boost operational efficiency and bring cost savings to businesses while offering convenience and added services to internal employees and external customers. They allow companies to easily resolve many types of customer queries and issues while reducing the need for human interaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat__comment">
                    <div class="fn__chat_comment">
                        <div class="new__chat">
                            <p>Ask it questions, engage in discussions, or simply enjoy a friendly chat.</p>
                        </div>
                        <textarea rows="1" class="fn__hidden_textarea" tabindex="-1"></textarea>
                        <textarea rows="1" placeholder="Send a message..." id="fn__chat_textarea"></textarea>
                        <button><img src="{{ URL::asset('build/svg/enter.svg') }}" alt="" class="fn__svg"></button>
                    </div>
                </div>
                <img src="{{ URL::asset('build/img/intro/click.png') }}" alt="" class="chat_decor">
            </div>
                
        </div>
        
        <div class="fn__center_title" id="demos">
            <div class="lines">
                <span class="l"></span>
                <span class="c"></span>
                <span class="r"></span>
            </div>
            <div class="text">
                <h3 class="big fn__animated_text">Template Demos</h3>
                <p>It is designed to create a dynamic and immersive user interface that generates images based on user inputs and engages in meaningful conversations.</p>
            </div>
        </div>
        <div class="templates">
            <ul>
                <li>
                    <div>
                        <a class="top" href="{{ url('/index') }}" target="_blank"><img src="{{ URL::asset('build/img/intro/demo-dark.jpg') }}" alt=""></a>
                        <div><a href="{{ url('/index') }}" target="_blank" class="techwave_fn_button"><span>Dark Version</span></a></div>
                    </div>
                </li>
                <li>
                    <div>
                        <a class="top" href="{{ url('/index-light') }}" target="_blank"><img src="{{ URL::asset('build/img/intro/demo-light.jpg') }}" alt=""></a>
                        <div><a href="{{ url('/index-light') }}" target="_blank" class="techwave_fn_button"><span>Light Version</span></a></div>
                    </div>
                </li>
            </ul>
        </div>
        
    </div>
</x-layouts.general>