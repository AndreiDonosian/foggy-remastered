<ul class="fn__model_items">
    @if(!empty($files))
        @foreach($files as $file)
            <li class="fn__model_item">
                <div class="item">
                    <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                        <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                        <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                    </a>
                    <div class="img">
                        <img src="{{$file['public_path']}}" alt="">
                    </div>

                    <div class="item__info">
                        <h3 class="title">{{$file['meta']['name']}}</h3>
                        <p class="desc">{{$file['meta']['type']}}</p>
                    </div>
                    <div class="item__author">
                        <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                        <h3 class="author_name">{{$file['meta']['size']}}</h3>
                    </div>
                </div>
            </li>
{{--            <li class="fn__model_item">--}}
{{--                <div class="item">--}}
{{--                    <a href="javascript:void(0);" class="fn__bookmark has__bookmark">--}}
{{--                        <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">--}}
{{--                        <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">--}}
{{--                    </a>--}}
{{--                    <div class="img">--}}
{{--                        <img src="{{ URL::asset('build/img/models/1.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="item__info">--}}
{{--                        <h3 class="title">GameVisuals</h3>--}}
{{--                        <p class="desc">A versatile model great at both photorealism and--}}
{{--                            anime, includes noise offset training... by Lykon.</p>--}}
{{--                    </div>--}}
{{--                    <div class="item__author">--}}
{{--                        <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">--}}
{{--                        <h3 class="author_name">Caden</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
        @endforeach
    @endif

    <li class="fn__model_item new" style="width: 30%">
        <label class="fn__upload">
                                <span class="upload_content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 383.5 271.6" style="enable-background:new 0 0 383.5 271.6;" xml:space="preserve" class="fn__svg replaced-svg">
<g>
	<path d="M383.5,183.2c-0.9,4.3-1.5,8.6-2.6,12.7c-9.2,34.7-39.5,58.6-75.5,59.5c-11.1,0.3-22.2,0.2-33.3,0.1   c-7.7-0.1-13.8-4.8-15.7-11.5c-1.9-6.7,0.6-14.1,6.6-17.6c2.8-1.6,6.3-2.6,9.5-2.7c10.6-0.3,21.2-0.1,31.8-0.2   c25.9-0.1,47.1-21.5,47.2-47.7c0.1-26.1-20.8-47.7-46.8-48.1c-11-0.2-16.2-4.9-18.4-15.6c-8-40.3-31.7-66.6-71.3-77.2   c-43-11.5-88.3,9.5-108.3,49.2c-3.9,7.8-9.4,11.5-18,12.2c-28.7,2.3-53.7,27.8-56.1,56.8c-2.8,33.8,18.7,62.9,51.8,69.1   c8.7,1.6,17.9,1,26.8,1.3c8.4,0.2,14.8,5,16.4,12.5c2,9.3-3.9,18.4-13.5,19.2c-31,2.5-59.9-3-83.1-25.5   C3.1,203-6.4,170.2,4.3,133.1c10.6-36.7,36.2-58.9,73.5-67.5c1.6-0.4,3.3-1.7,4.1-3.1c20.7-33.3,50.2-53.8,88.9-60.7   C234-9.3,297.2,30.4,314.5,92.3c0.9,3.2,2.2,4.7,5.7,5.5c33.7,7.3,58,33.7,62.6,68c0.1,0.8,0.4,1.7,0.7,2.5   C383.5,173.2,383.5,178.2,383.5,183.2z"></path>
	<path d="M176,166.6c-1.5,1.4-2.4,2.1-3.3,3c-5.7,5.6-11.2,11.3-16.9,16.9c-6.9,6.7-16.7,6.9-23.1,0.5c-6.4-6.4-6.2-16.3,0.6-23.1   c15.6-15.7,31.2-31.3,46.8-46.8c7.1-7.1,16.5-7.1,23.6,0c15.7,15.5,31.3,31.1,46.8,46.8c6.8,6.8,6.9,16.7,0.6,23.1   c-6.3,6.4-16.2,6.3-23.1-0.4c-5.7-5.6-11.3-11.3-16.9-16.9c-0.8-0.8-1.7-1.6-3.3-3c0,2.2,0,3.5,0,4.8c0,27.7,0,55.4,0,83   c0,8.1-4,14-10.7,16.3c-10.5,3.6-20.9-4-21-15.5c-0.1-18.6,0-37.2,0-55.7c0-9.5,0-19,0-28.4C176,169.9,176,168.7,176,166.6z"></path>
</g>
</svg>
                                    <span class="title">Drag &amp; Drop a File</span>
                                    <span class="fn__lined_text">
                                        <span class="line"></span>
                                        <span class="text">Or</span>
                                        <span class="line"></span>
                                    </span>
                                    <span class="title">Browse</span>
                                    <span class="desc">Supports Everything</span>
                                </span>
            <span class="upload_preview">
                                    <a href="javascript:void(0);" class="fn__closer fn__icon_button">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 383.3 383.3" style="enable-background:new 0 0 383.3 383.3;" xml:space="preserve" class="fn__svg replaced-svg">
<g>
	<path d="M15,383.3c-1.1-0.5-2.2-1-3.3-1.4C0.2,377.1-3.6,362.9,4,353.1c1.1-1.5,2.5-2.8,3.8-4.1c51.3-51.3,102.7-102.7,154-154   c1-1,2.4-1.7,3.9-2.7c-1.8-1.9-2.8-3-3.8-4C110.1,136.6,58.5,84.9,6.8,33.3c-5.2-5.2-7.9-11.2-6.3-18.5C3.7,0.7,20.2-4.7,31.1,4.7   c1.2,1.1,2.3,2.2,3.5,3.4C85.7,59.3,136.9,110.4,188,161.6c1.1,1.1,2,2.3,3.2,3.8c1.4-1.3,2.5-2.3,3.5-3.3   C246.4,110.3,298.1,58.7,349.8,7c6-6,12.7-8.6,21-5.8c6.7,2.2,10.2,7.5,12.5,13.9c0,2.5,0,5,0,7.5c-1.8,5.6-5.6,9.8-9.7,13.8   C322.8,87,272.1,137.7,221.3,188.4c-1,1-2,2.1-3.4,3.5c1.4,1.2,2.6,2.1,3.7,3.2c50.5,50.5,101.1,101.1,151.7,151.6   c4.2,4.2,8.1,8.4,10,14.1c0,2.5,0,5,0,7.5c-2.4,7.6-7.4,12.6-15,15c-2.5,0-5,0-7.5,0c-5.6-1.8-9.7-5.7-13.8-9.7   c-50.7-50.8-101.4-101.5-152.1-152.2c-1-1-2.1-2-3.7-3.5c-1.2,1.5-2,2.8-3,3.8C137.5,272.2,86.9,322.9,36.3,373.5   c-4.1,4.1-8.2,7.9-13.8,9.7C20,383.3,17.5,383.3,15,383.3z"></path>
</g>
</svg>
                                    </a>
                                    <img src="#" alt="" class="preview_img">
                                </span>
        </label>
        <form id="_upload" style="display:none;">
            @csrf
            <input type="hidden" id="pin" value="{{$pin}}">
            <input type="file" id="uploadFile" accept="*">
        </form>
    </li>

</ul>