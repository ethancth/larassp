<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirtualMachine extends Model
{
    protected $fillable = [
        'dc_id', 'dc_name', 'vm_id', 'vm_name', 'vm_cpu','vm_cpi','vm_men','vm_os','vc_name','vc_id','host_name','host_id','cluster_name','cluster_id','power_status','boottime','is_template','vm_folder','storage_usage','committed','uncommitted','unshared',
    ];

    public function getvmpowerstatus(){
        $data['total_vm'] = 0;
        $data['total_vm_power_on'] = 0;
        $data['total_vm_power_off'] = 0;

        $count_vm = $this->where('is_template','false')->count();
        $count_vm_on = $this->where('is_template','false')->where('power_status','poweredOn')->count();
        $count_vm_off = $this->where('is_template','false')->where('power_status','poweredOff')->count();
        $data['total_vm']=$count_vm;
        $data['total_vm_power_on']=$count_vm_on;
        $data['total_vm_power_off']=$count_vm_off;
        return $data;
    }
}
