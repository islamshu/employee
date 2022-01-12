<div class="modal-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="userinput4">آلية التواصل</label>
                <select name="communication" required class="form-control">
                    <option value="" selected  disabled>اختر آلية التواصل</option>
                    <option value="email" @if(old('communication') =='email') selected @endif>البريد الإلكتروني</option>
                    <option value="phone" @if(old('communication') =='phone') selected @endif>رقم الهاتف</option>
                    <option value="meet" @if(old('communication') =='meet') selected @endif>اجتماع</option>
                    <option value="online" @if(old('communication') =='online') selected @endif>اون لاين</option>
                    <option value="event" @if(old('communication') =='event') selected @endif>حدث</option>
                    <option value="other" @if(old('communication') =='other') selected @endif>آخرى</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="userinput4">حالة الرد</label>
                <select name="status" required id="status" onchange="change('status')" class="form-control">
                    <option value="" selected disabled>اختر  حالة التواصل</option>

                    <option value="respond" @if(old('status') =='respond') selected @endif>استجاب</option>
                    <option value="not_Respond"@if(old('status') =='not_Respond') selected @endif>غير مستجاب</option>                                 
                </select>
            </div>
        </div>
        <div class="col-md-6" id="unresponse" style="display: none">
            <div class="form-group">
                <label for="userinput4">الحالة </label>
                <select name="status2" id="status2"  class="form-control">
                    <option value="" selected  disabled>اختر  حالة التواصل</option>

                    <option value="interested" @if(old('status2') =='interested') selected @endif>مهتم</option>
                    <option value="not_Interested" @if(old('status2') =='not_Interested') selected @endif>غير مهتم</option>    
                    <option value="negotiation" @if(old('status2') =='negotiation') selected @endif>تفاوض</option>                              

                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="userinput4"> اسم الخدمة</label>
                <input list="brow" id="test" value="{{ old('servicec') }}" required name="servicec" class="form-control">
                <datalist id="brow">
                    @foreach ($servics as $item)
                    <option value="{{$item->title}}">
                    @endforeach
                </datalist>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="userinput4">تحديد موعد</label>
                <input type="date"  value="{{ old('metting_date') }}" required name="metting_date" class="form-control">
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="userinput4">السمتخدمين</label>
                <select name="users[]" multiple class="form-control" id="">
                    <option value="">اختر المستخدمين</option>
                    @foreach (\App\User::get() as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                
            </div>
        </div>
        
     
   
</div>
</div>
