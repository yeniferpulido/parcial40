<?php

namespace app\controllers;

use app\models\entities\Income;

class incomeController
{

    public function queryAllIncome()
    {
        $income = new Income();
        $data = $income->all();
        return $data;
    }

     public function updateincome($request)
    {
        $income = new Income();
        $income->set('id', $request['idInput']);
        $income->set('value', $request['valueInput']);
        $income->set('idReport', $request['idReportInput']);
        return $income->update();
    }

   
    public function saveNewIncome($request)
    {
        $value = $request['valueInput'];
        $idReport = $request['idReportInput'];
    
        if (!is_numeric($value) || strlen((string)(int)$value) >= 9) {
            return 'valor_invalido';
        }
        $income = new Income();
        $income->set('value', $request['valueInput']);
        $income->set('idReport', $request['idReportInput']);
        return $income->save();
    }
    public function deleteIncome($id)
    {
        $income = new Income();
        $income->set('id', $id);
        return $income->delete();
    }

    public function updateSalarioTotal($request)
{
    $id = isset($request['idInput']) ? intval($request['idInput']) : null;
    $salarioM = isset($request['salarioMInput']) ? floatval($request['salarioMInput']) : null;

    if (!$id || !$salarioM) {
        return false;
    }

    $income = new \app\models\entities\Income();
    $income->set('id', $id);
    $income->set('value', $salarioM);

    return $income->updateSalarioTotal();
}


    public function getIncomeByReportId($reportId)
{
    $income = new \app\models\entities\Income();
    return $income->getByReportId($reportId);
}



}