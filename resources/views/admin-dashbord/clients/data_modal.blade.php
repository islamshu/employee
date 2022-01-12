<div class="modal-body">
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">اسم العميل</label>
            <input type="text" readonly="true"  ondblclick="change('id_name')"   onchange="setInput({{ $item->id }},'id_name','name')" value="{{ $item->name }}"  id="id_name"
                class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">رقم الهاتف </label>
            <input type="text" readonly="true" ondblclick="change('id_phone')"   onchange="setInput({{ $item->id }},'id_phone','phone')" value="{{ $item->phone }}"  id="id_phone"
                class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">البريد الإلكتروني  </label>
            <input type="text" readonly="true"  ondblclick="change('id_email')"   onchange="setInput({{ $item->id }},'id_email','email')"  value="{{ $item->email }}"   id="id_email"
                class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">اسم الشركة   </label>
            <input type="text" readonly="true"  ondblclick="change('id_company')"   onchange="setInput({{ $item->id }},'id_company','company_name')"  value="{{ $item->company_name }}"  id="id_company" 
                class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">المسمى الوظيفي  </label>
            <input type="text" readonly="true"  value="{{ $item->jobtitle }}"  
                class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">المسخدم</label>
            <input type="text" readonly="true" value="{{ $item->user->name }}"  id="userinput3"
            class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">الفيس بوك</label>
            <input type="text" readonly="true"   ondblclick="change('id_facebook')"   onchange="setInput({{ $item->id }},'id_facebook','facebook')" value="{{ $item->facebook }}"  id="id_facebook"
            class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">تويتر</label>
            <input type="text" readonly="true" ondblclick="change('id_twitter')"   onchange="setInput({{ $item->id }},'id_twitter','twitter')" value="{{ $item->twitter }}"  id="id_twitter"
            class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">انستقرام</label>
            <input type="text" readonly="true" ondblclick="change('id_instagram')"   onchange="setInput({{ $item->id }},'id_instagram','instagram')"  value="{{ $item->instagram }}"  id="id_instagram"
            class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="userinput3">السناب شات</label>
            <input type="text" readonly="true"  ondblclick="change('id_snapchat')"   onchange="setInput({{ $item->id }},'id_snapchat','snapchat')" value="{{ $item->snapchat }}"  id="id_snapchat"
            class="form-control border-primary" >
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="userinput3">ملاحظات</label>
            <textarea name="notes" ondblclick="change('id_notes')"  readonly="true"    onchange="setInput({{ $item->id }},'id_notes','notes')"  class="form-control" id="id_notes" cols="20" rows="5">{!! $item->notes !!}</textarea>
        </div>
    </div>
   
</div>
</div>