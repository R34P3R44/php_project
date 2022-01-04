<div class="container mx-auto">
</div>
<div class="container mx-auto">
    <div class="mx-4 mt-12">
        <h4 class="font-medium text-gray-600 mb-2">Add a new Member</h4>
        <p class="text-sm text-gray-500 mb-4">Add your new member here</p>
    </div>
    <div>
        <form action="{{ route('members')}}" method="post">
            @csrf
            <div class="p-4 max-w-xl space-y-4">
                <div>
                    <label for="member" class="block text-sm font-medium text-gray-700">Member name</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="name" id="name" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Member name here">
                    </div>
                    <div class="my-4"></div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Member email</label>
                    <div class="mt-1 flex rounded-md">
                        <input type="text" step="any" name="email" id="email" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300" placeholder="Member email here">
                    </div>
                    <div class="my-4"></div>
                    <label for="school_id" class="block text-sm font-medium text-gray-700">School</label>
                    <div class="mt-1 flex rounded-md">
                        <select id="school_id" name="school_id" class="focus:ring-gray-500 focus:border-gray-500 flex-1 block w-full rounded text-sm border-gray-300">
                            @foreach($schools as $school)
                                <option value="{{ $school['id'] }}">{{ ucwords($school['name']) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Save Member</button>
            </div>
        </form>
    </div>
    <div class="my-4 mt-12">
        <div class="mx-4 mt-12">
            <h4 class="font-medium text-gray-600 mb-2">Schools members</h4>
            <table>
                <thead>
                <tr>
                    <th>School name</th>
                    <th>Member name</th>
                    <th>Member email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($schools as $school)
                    @foreach($school['members'] as $member)
                        <tr>
                            <td class="padded-border"> {{$school['name']}}</td>
                            <td class="padded-border"> {{$member['name']}}</td>
                            <td class="padded-border"> {{$member['email']}}</td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<style>
    table, th, td {
        border: 1px solid #9c27b0;
    }
    table th, table td{
        padding-right: 10px;
        padding-left: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
    }
</style>
