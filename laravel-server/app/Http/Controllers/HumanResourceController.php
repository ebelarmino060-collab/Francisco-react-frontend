<?php

namespace App\Http\Controllers;

// use to recieve data from the client side
use Illuminate\Http\Request;

class HumanResourceController extends Controller
{

    public function payroll(Request $request)
    {
       $age = $request->age;

       return response()->json([
        "age" => $age
       ]);
    }

    public function EmployeePayroll(Request $request)
    {
        $employmentType = $request->employmentType;
        $positionTier = $request->positionTier;
        $daysAbsent = $request->daysAbsent;
        $minutesLate = $request->minutesLate;
        $overTimeHours= $request->overTimeHours;
        $monthlyBaseSalary;
        $SSS;
        $PhilHealth;
        $PAGIBIG;

        if($employmentType == "COS")
        {
            $monthlyBaseSalary = 18000;
            $positionTier = "None";
            $SSS = 0;
            $PhilHealth = 0;
            $PAGIBIG = 0;
        }
        else 
        {
            if($positionTier == "Junior")
            {
                $monthlyBaseSalary = 25000;
                $SSS = 1125;
                $PhilHealth = 625;
                $PAGIBIG = 200;
            }
            else if($positionTier == "Senior")
            {

                $monthlyBaseSalary = 40000;
                $SSS = 1800;
                $PhilHealth = 1000;
                $PAGIBIG = 200;
            }
        }

        $daysPresent = 22 - $daysAbsent;
        $dailyRate =  $monthlyBaseSalary / 22;
        $hourlyRate = $dailyRate / 8;
        $lateDeduction = ($hourlyRate / 60) * $minutesLate;
        $absentDeduction = $dailyRate * $daysAbsent;
        $overTimePay = $overTimeHours * ($hourlyRate * 1.25);
        $grossPay = $monthlyBaseSalary - $lateDeduction - $absentDeduction + $overTimePay;
        $totalDeduction = $SSS + $PhilHealth + $PAGIBIG;
        $netPay = $grossPay - $totalDeduction;

            return response()-> json([
                "daysAbsent" => $daysAbsent,
                "employmentType" => $employmentType,
                "positionTier" => $positionTier,
                "monthlyBaseSalary" => round($monthlyBaseSalary,2),
                "daysPresent" => $daysPresent,
                "dailyRate"=> round($dailyRate, 2),
                "lateDeduction" => round($lateDeduction,2),
                "overTimePay" => round($overTimePay, 2),
                "grossPay" => round($grossPay,2),
                "SSS" => $SSS,
                "PhilHealth" => $PhilHealth,
                 "PAGIBIG" => $PAGIBIG,
                "totalDeduction" => $totalDeduction,
                "netPay" => round($netPay,2)
            ]);

        
       
    }


    
}
