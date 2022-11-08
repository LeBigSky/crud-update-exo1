<section>
    <h1> Modifier un animal</h1>
        <div class="container d-flex justify-content-center gap-2">
            <form class="d-flex gap-2" action="/update/{{ $edit['id'] }}" method="POST">
            @csrf
            <div>
                <label for="espece">Espece</label>
                <input type="text" name="espece" id="espece" value="{{ $edit['espece'] }}">
            </div>
         
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="{{ $edit['age'] }}">
            </div>
            <button type="submit">Modifier l'animal</button> 
            </form>
    </div>
    </section>