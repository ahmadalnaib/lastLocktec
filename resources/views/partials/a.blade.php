
<div class="modal  fade" id="b-{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel2">{{$a->title}}</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     

        <div class="modal-body container">
          <div class="mb-5 ">
            <img class="img-fluid"   src="{{asset('storage/'.$a->image_path)}}" alt="locker" />
          </div>
        <p class="lead">{!! $a->tecnische!!}</p>

        
        </div>
   
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('actions.Close')}}</button>
        <a target="_blank" href="https://www.locktec.com/kontakt/" class="btn btn-outline-danger"
        >{{__('actions.Contact_us')}}</a
      >

      </div>
    </div>
  </div>
</div>
</div>



