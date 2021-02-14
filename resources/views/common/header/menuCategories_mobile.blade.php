@isset($categorias)
    <div class="categorie__mobileSelection" id="categoriesMenu_mobile">
        <div class="categorie__mobileHead">
            <h3 class="categorie__mobileHead-title">CATEGORIAS</h3>
            <div id="botonClose_categorieMenu_mobile" class="categorie__mobileHead-close">
                x
            </div>
        </div>
      
        <div class="categorie__mobileBody">
            @for ($i = 0; $i < 7; $i++)
                @foreach($categorias as $categoria)
                <a href="{{route('product.category.show', $categoria->slug)}}" class="categorie__mobileBody-item">
                    <span class="categorie__mobileBody-icon">
                        @include('common.header.menuCategoryIcon_mobile')    
                    </span>
                    <span class="categorie__mobileBody-iconActive">
                        @include('common.header.menuCategoryIconActive_mobile')
                    </span>
                    {{$categoria->title}}
                </a>
                @endforeach
                
            @endfor
        </div>
    </div>
@endisset