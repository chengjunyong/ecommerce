<div style="padding: 10px; font-family: arial;">
  <p style="font-size: 25px; font-weight: bold; padding-bottom: 25px; margin-bottom: 0px; width: 100%; text-align: center;">{{ $data->subject }}</p>

  <div style="padding: 10px; background: #eee;">
    <p style="margin: 0px;"> Hi {{ $data->name }} </p>
    <br />
    <p style="margin: 0px;"> {!! html_entity_decode($data->message) !!}  </p>
  </div>

</div>


