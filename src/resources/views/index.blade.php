@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<script type="module" src="{{ asset('js/module_alias.js') }}"></script>
<script type="module" src="{{ asset('js/module_all.js') }}"></script>
<script type="module" src="{{ asset('js/module_use_util.js') }}"></script>
<script type="module" src="{{ asset('js/module_dynamic.js') }}"></script>

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
