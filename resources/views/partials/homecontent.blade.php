<section>
    <div class="container">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                  <th>Espece</th>
                  <th>Age</th>
                  <th>Show</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal )
            
                
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <h4>{{ $animal['espece'] }}</h4>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $animal['age'] }}</p>
                </td>
                <td>
                    <a class="text-white" style="text-decoration: none" href={{ "show/".$animal['id'] }}>
                  <button type="button" class="btn btn-info btn-sm btn-rounded">
                    Show
                  </button>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</section>