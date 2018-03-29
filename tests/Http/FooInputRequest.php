<?php

/*
 * This file is part of emanci/lumen-request package.
 *
 * (c) emanci <zhengchaopu@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tests\Http;

use Emanci\LumenRequest\InputRequest;

class FooInputRequest extends InputRequest
{
    public function authorize()
    {
        return 'emanci' === $this->input('name');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'email xxx',
        ];
    }
}