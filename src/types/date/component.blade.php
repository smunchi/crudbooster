@include("types::layout_header")
    @php /** @var \crocodicstudio\crudbooster\types\date\DateModel $column */ @endphp
        <input type='text' title="{{ $column->getLabel() }}"
               placeholder="{{ $column->getPlaceholder() }}"
               {{ $column->getRequired()?'required':''}}
               {{ $column->getReadonly()?'readonly':''}}
               {{ $column->getDisabled()?'disabled':''}}
               class='form-control date-picker'
               name="{{ $column->getName() }}"
               id="{{ $column->getName() }}"
               data-format="{{ $column->getFormat()?convertPHPToMomentFormat($column->getFormat()):"YYYY-MM-DD HH:mm:ss" }}"
               value='{{ $column->getValue() }}'/>
@include("types::layout_footer")