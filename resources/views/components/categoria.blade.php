<label class="form-check">
    <input 
        type="radio" 
        class="form-check-input" 
        name="categoria_id" 
        id="optionsRadios1" 
        value="{{ $categoria->id }}"
        optionsRadios1
        {{ ( $categoria->parent_id === NULL ) ? 'disabled' : '' }}
        required
    >
    <span class="{{ $categoria->isChild() ? null : 'categoria-bold' }}">
        {{ $categoria->titol_cat }} @if(!$categoria->children->isEmpty())<i class="mdi mdi-chevron-down menu-icon"></i>@endif
    </span>
</label>
<!-- Recursivitat per mostrar els fills d'aquesta categoria -->
<x-categories :categories="$categoria->children" />