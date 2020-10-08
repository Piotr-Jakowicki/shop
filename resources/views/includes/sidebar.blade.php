<div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Collapsible Group Item #1
          </button>
        </h2>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">
            Cras justo odio
          </a>
          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
        </div>
      </div>
    </div>

    
    @for($i=0;$i<9;$i++)
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree{{$i}}" aria-expanded="false" aria-controls="collapseThree{{$i}}">
            Collapsible Group Item #{{$i+2}}
          </button>
        </h2>
      </div>
    <div id="collapseThree{{$i}}" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              Cras justo odio
            </a>
            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
          </div>
      </div>
    </div>
    @endfor
  </div>