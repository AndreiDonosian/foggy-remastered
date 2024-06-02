<x-layouts.auth>
    <x-slot name="title">User Billing</x-slot>
    <x-slot name="meta">
        <meta name="description" content="User Billing">
    </x-slot>

<!-- User Billing Page -->
<div class="techwave_fn_user_billing_page">
    <!-- Page Title -->
    <div class="techwave_fn_pagetitle">
        <h2 class="title">User Billing</h2>
    </div>
    <!-- !Page Title -->

    <div class="container small">
        <div class="techwave_fn_user_billing">
            
            <div class="billing__plan">
                <div class="plan"><span>Your Plan</span></div>
                <h2 class="title">Personal Plan — $15.00 Per Month</h2>
                <p class="desc">You will given 8000 tokens every month</p>
            </div>
            
            <div class="billing__activation">
                
                <div class="activation_status">
                    <div class="status_left">
                        <h2 class="title">Active until Dec 09, 2025</h2>
                        <p class="desc">We will send you a notification upon Subscription expiration</p>
                    </div>
                    <div class="status_right">
                        <span class="info">657 Days Left</span>
                        <span class="progress" data-percentage="66.66%"></span>
                    </div>
                </div>
                
                <div class="activation_actions">
                    <a href="{{ url('/pricing') }}" class="techwave_fn_button"><span>Upgrade Plan</span></a>
                    <a href="{{ url('/pricing') }}" class="disabled techwave_fn_button"><span>Cancel Subscription</span></a>
                </div>
                
            </div>
            
            <div class="payment__methods">
                <h2 class="title">Payment Methods</h2>
                <div class="payment_list">
                    <ul class="payment__list">
                        <li class="payment__list_item ready">
                            <div class="item">
                                <div class="item_header">
                                    <h2 class="title">Mastercard **** 4658</h2>
                                    <p class="subtitle">Card expires at 03/25</p>
                                </div>
                                <div class="action">
                                    <div class="edit_wrapper">
                                        <a href="javascript:void(0);" class="options"><span class="dots"></span></a>
                                        <div class="edit__popup">
                                            <ul>
                                                <li><a href="javascript:void(0);" class="edit">Edit</a></li>
                                                <li><a href="javascript:void(0);" class="delete">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="payment__list_item ready">
                            <div class="item">
                                <div class="item_header">
                                    <h2 class="title">Visa **** 3623</h2>
                                    <p class="subtitle">Card expires at 07/27</p>
                                </div>
                                <div class="action">
                                    <div class="edit_wrapper">
                                        <a href="javascript:void(0);" class="options"><span class="dots"></span></a>
                                        <div class="edit__popup">
                                            <ul>
                                                <li><a href="javascript:void(0);" class="edit">Edit</a></li>
                                                <li><a href="javascript:void(0);" class="delete">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="primary">
                                        <span>Primary</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="payment__list_item new">
                            <div class="item">
                                <a href="javascript:void(0);" class="fn__full_link"></a>
                                <span class="add"></span>
                                <span class="text">Add new</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
<!-- !User Billing Page -->
</x-layouts.auth>