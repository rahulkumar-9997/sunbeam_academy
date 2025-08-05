<form method="post" action="{{ route('enquiry.submit') }}" id="branchEnquiryForm" enctype="multipart/form-data">
    @csrf
    @isset($branch)
        <input type="hidden" name="branch_name" value="{{ $branch->name }}">
    @else
        <input type="hidden" name="branch_name" value="General Enquiry">
    @endisset
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="enquiry_name" id="enquiry_name" placeholder="Your Name *" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" name="enquiry_email" id="enquiry_email" placeholder="Your Email">
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="enquiry_phone" id="enquiry_phone" placeholder="Your phone no. *" maxlength="10" pattern="[0-9]{10}">
    </div>
    <div class="form-group">
        <textarea name="enquiry_message" id="enquiry_message" cols="20" rows="4" class="form-control" placeholder="Write Your Message"></textarea>
    </div>
    <button type="submit" class="theme-btn">Submit<i class="far fa-paper-plane"></i></button>
    <div class="col-md-12 mt-3">
        <div class="form-messege text-success"></div>
    </div>
</form>