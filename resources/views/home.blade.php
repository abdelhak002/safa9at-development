@extends('layouts.app')


@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')

<div class="container emp-profile">


                <div class="row">
                    <div class="col-md-4 @if($dir == 'right') order-md-1 @endif">
                        <div class="profile-img">
            				<img src="{{ asset('storage/'.Auth::user()->avatar) }}" class="rounded-circle  border border-gray img-fluid" style="width: 150px;height: 140px;border-radius: 50%;">
                             <h1 class="pb-4">
                                        {{Auth::user()->name}}
                                    </h1>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head">
                                   
                            <ul class="nav nav-tabs p-0" id="myTab" role="tablist" {{ $rtl }}>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{ __('profile.balance') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" title="Personal information">{{ __('profile.accountInfo') }}</a>
                                </li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        
                                        @if($balance == NULL)
                                        <button type="button" class="btn btn-lg btn-primary float-{{ $dir }}" data-toggle="modal" data-target="#exampleModalLong"> {{ __('profile.createCurrencies') }}</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('profile.termsAndConditions') }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body text-right" {{ $rtl }}>
                                               
                                                    
                                                <h2>باستعمالك للموقع انت توافق على الشروط التالية
                                                </h2>
                                                <ul>
                                                  <li>لا يعذر بجهل القوانين و الشروط</li>
                                                  <li>كل عملية احتيال او نصب قد تؤدي بتوقيف حسابك و خسارة اموالك</li>
                                                  <li>لا يمكن تعويضك في حالة كان الخطئ صادرا منك حتى و لو لم تتعمد الخطئ</li>
                                                  <li>لا يمكن تعويضك في حالة كان الخطئ صادرا من اي شركة وسيطة</li>
                                                  <li>انت تتحمل مسئولية حماية حسابك</li>
                                                  <li>يمكننا تعديل القوانين و الشروط في اي وقت و سيتم اعلامكم بتاريخ تطبيق القوانين و الشروط الجديدة قبل اسبوع من دخولها حيز التطبيق</li>
                                                </ul>

                                                <h3>قوانين الايداع</h3>
                                                <ul>
                                                  <li>للايداع في موقعنا يجب ارسال المبلغ اولا، بعدها يمكنك انشاء الايداع</li>
                                                  <li>عند انشائك للايداع يرجى كتابة المبلغ بشكل صحيح، في حالة اخطائك في كتابة المبلغ الصحيح سنقوم بتغيير المبلغ ليطابق المبلغ المرسل الينا و ذلك قبل اتخاذ قرار قبول الايداع</li>
                                                  <li>اذا لم نتلقى المبلغ المرسل الينا او كان قيد الارسال او محجوزا سنقوم بالغاء الايداع و يتوجب عليك انشاء الايداع من جديد بعد اكتمال الارسال و تئكدك بتوصلنا للمبلغ</li>
                                                  <li>في حالة حدوث مشكل ما عليك الاتصال بنا فورا و قبل فوات الاوان</li>
                                                </ul>

                                                <h3>قوانين الدفع</h3>
                                                <ul>
                                                  <li>عند دفعك لمبلغ معين لشراء خدمة معينة عليك بقراءة وصف الخدمة بتمعن و اتباع ما تنص عليه</li>
                                                  <li>بعد انشاء الدفع عليك ذكر كل ما تحتاجه في الخدمة قبل قبول الخادم للدفع</li>
                                                  <li>يجب ان تسيير كل المحادثة على موقعنا فقك</li>
                                                  <li>لا يجب ان تقدم اي معلومات حساسة تخص حسابك للخادم</li>
                                                  <li>الدفع يكون فقط عبر موقعنا اي دفع خارج نطاق موقعنا لا يتم تعويضه</li>
                                                  <li>في حالة عدم قيام الخادم بعمله على اكمل وجه يرجى مواصلتنا ليتم فتح التحقيق</li>
                                                  <li>في حالة حدوث مشاكل بين المشتري و الخادم يرجى التواصل معنا</li>
                                                </ul>

                                                <h3>قوانين السحب</h3>
                                                <ul>
                                                  <li>يجب ان تكون معلومات السحب كاملة و صحيحة</li>
                                                  <li>عند السحب عن طريق البايبال سيصلك المبلغ ناقصا بسبب رسوم البايبال</li>
                                                  <li>عند السحب عن طريق البريد سيصلك المبلغ ناقصا بسبب رسوم البريد + رسوم موقعنا و التي تقدر ب 40 دج</li>
                                                  <li>السحب عن طريق البايسيرا لا يكلف اي رسوم سيصلك المبلغ كاملا</li>
                                                </ul>

    

    

                                                

    

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('profile.no') }}</button>
                                                <form method="POST" action="{{ url('balance') }}">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-primary">{{ __('profile.accept') }}</button>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        @else

  <div class="row justify-content-center">
    @foreach($paymentMethods as $payment_method)
      @foreach($currencies as $currency)
        @if(str_contains($currency->compatible_with, $payment_method->name))
        @PHP($pm = $payment_method->name.'_'.$currency->name)
        @PHP($hold_pm = 'hold_'.$payment_method->name.'_'.$currency->name)
            <div class="col-auto">
              <div class="card text-white mt-2 text-center" style="max-width:250px;min-width:200px;background:{{$payment_method->color}}">
                <p class="text-left position-absolute text-white"><img src="{{ asset('storage/'.$payment_method->icon)}}" style="max-width:15px;"> {{$payment_method->name}}</p>
                  <div class="card-body">
                    <h2 class="card-title mt-2"> {{ $balance->$pm }} {{ Str::upper($currency->name) }}</h2>
                      @if($balance->$hold_pm > 0)
                      <p class="position-absolute r-1 text-white">{{$balance->$hold_pm}} $ {{ __('profile.inHold') }}</p>
                      @endif
                  </div>
              </div>
            </div>
        @endif
      @endforeach
    @endforeach

</div>
  <hr>

  @endif
                            </div>
                            <div class="tab-pane fade {{ $tdir }}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row" {{ $rtl }}>
                                            <div class="col-md-6">
                                                <label>{{ __('profile.fullName') }}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row" {{ $rtl }}>
                                            <div class="col-md-6">
                                                <label>{{ __('profile.email') }}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row" {{ $rtl }}>
                                            <div class="col-md-6">
                                                <label>{{ __('profile.phone') }}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>@if(Auth::user()->phone === NULL) {{ __('profile.noPhone') }} @else {{Auth::user()->phone}}  @endif</p>
                                            </div>
                                        </div>
                                        <div class="row" {{ $rtl }}>
                                            <div class="col-md-6">
                                                <label>{{ __('profile.birthday') }}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>@if(Auth::user()->birthday === NULL) {{ __('profile.noBirthday') }} @else {{Auth::user()->birthday}}  @endif</p>
                                            </div>
                                        </div>
                                        <div class="row" {{ $rtl }}>
                                            <div class="col-md-6">
                                                <label>{{ __('profile.address') }}</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>@if(Auth::user()->address === NULL) {{ __('profile.noAddress') }} @else {{Auth::user()->address}}  @endif</p>
                                            </div>
                                        </div>
                                    <input type="submit" onclick="window.location.href=('{{ url('profile/'.Auth::id().'/edit') }}')" class="profile-edit-btn mt-4" name="btnAddMore" value="{{ __('profile.editProfile') }}"/>
   
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>

                
        </div>


@endsection
