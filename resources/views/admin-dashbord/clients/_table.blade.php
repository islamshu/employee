<tbody id="edit_table">
    @foreach ($clients as $item)
        <tr>
            <td> <a  class="btn" onclick="make('{{$item->id}}')"     data-toggle="modal" data-target="#default">{{ $item->name }}</a></td>
           

            <td>
                <form style="display: inline"
                    action="{{ route('clients.destroy', $item->id) }}" method="post">
                    @csrf @method('delete')
                    <button type="submit"
                        class="btn btn-icon btn-danger mr-1 delete-confirm"><i
                            class="la la-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>