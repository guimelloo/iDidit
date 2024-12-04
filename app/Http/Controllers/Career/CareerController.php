<?php declare(strict_types=1);

namespace App\Http\Controllers\Career;

use App\Admin\Users\UsersResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CareerController extends Controller
{
    public function __construct(private CareerRepository $repository)
    {}

    public function index()
    {
        return view('career');
    }

    public function careerHome()
    {
        return view('careerHome');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'art' => 'required|string',
        ]);
        
        if ($this->repository->create($validated)) {
            return view('/CareerHome');
        }
    }

    public function update(int $id, Request $request)
    {
        
    }

    public function delete(int $group)
    {
    }
}
