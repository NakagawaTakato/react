@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<script src="{{ asset('js/utils.js') }}"></script>
<script src="{{ asset('js/obj_prop.js') }}"></script>
<script src="{{ asset('js/obj_method.js') }}"></script>
<!-- <script src="{{ asset('js/destruct_list.js') }}"></script>
<script src="{{ asset('js/obj_computed.js') }}"></script>
<script src="{{ asset('js/destruct_obj.js') }}"></script>
<script src="{{ asset('js/func_rest.js') }}"></script>
<script src="{{ asset('js/modle_basic.js') }}" type="module"></script> -->
@endsection

@section('content')
<div class="container">
    <div id="app">
        <script type="text/babel">
            const appEl = document.querySelector('#app');
            const root = ReactDOM.createRoot(appEl);
            // function Example() {
            //     return <h1>Hello Components</h1>
            // }
            const Example = () => {
                <div>
                    <h1>Hello Components</h1>
                </div>
            }

            const a = () => {
                return ;
                "戻り値";
            }
            console.log(a());

            root.render(<Example />);

            ReactDOM.render(<h1>こんにちは</h1>);
        </script>
    </div>
</div>
@endsection
