<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default p-4">
                            <div class="panel-heading"><h1>Referrals</h1></div>
                        </div>
                        <div class="panel-body p-4">
                            <div class="referrals-header mb-5">
                                <label for="country">Countries</label> 
                                <select id="country">
                                    <option value="">All</option> 
                                    <option value="INDIA">INDIA</option>
                                    <option value="BRAZIL">BRAZIL</option>
                                </select> 
                                <button id="filter" class="btn btn-primary">Filter</button> 
                                <a href="/referrals/upload" class="btn btn-success float-right">Bulk Upload</a>
                            </div>
                            <div>
<table id="referrals-table" class="display" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
