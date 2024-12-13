
<div class = "container"> 
    <div class = "row justify-content-center"> 
        <div class = "col-md-8"> 
            <div class = "card"> 
                <div class = "card-header"> <h1> Welcome! </h1></div> 
                    <div class = "card-body"> 
                        @if (session('resent'))
                            <div class = "alert alert-success" role = "alert">
                                {{ _('A fresh mail has been sent to your email address.') }}
                            </div>
                        @endif
                        <<p><strong>Name:</strong> {{ $name }}</p>
                        <p><strong>Email:</strong> {{ $email }}</p>
                        <p><strong>Message:</strong></p>
                        <p>{{ $content }}</p>
                    </div>
            </div>
        </div>
    </div>
</div>
