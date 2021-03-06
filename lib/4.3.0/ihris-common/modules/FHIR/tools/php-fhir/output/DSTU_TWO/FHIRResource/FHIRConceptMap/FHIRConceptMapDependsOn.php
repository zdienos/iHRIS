<?php namespace DSTU_TWO\FHIRResource\FHIRConceptMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 13th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DSTU_TWO\FHIRElement\FHIRBackboneElement;
use DSTU_TWO\JsonSerializable;

/**
 * A statement of relationships from one set of concepts to one or more other concepts - either code systems or data elements, or classes in class models.
 */
class FHIRConceptMapDependsOn extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * A reference to a specific concept that holds a coded value. This can be an element in a FHIR resource, or a specific reference to a data element in a different specification (e.g. HL7 v2) or a general reference to a kind of data field, or a reference to a value set with an appropriately narrow definition.
     * @var \DSTU_TWO\FHIRElement\FHIRUri
     */
    public $element = null;

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @var \DSTU_TWO\FHIRElement\FHIRUri
     */
    public $codeSystem = null;

    /**
     * Identity (code or path) or the element/item/ValueSet that the map depends on / refers to.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $code = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ConceptMap.DependsOn';

    /**
     * A reference to a specific concept that holds a coded value. This can be an element in a FHIR resource, or a specific reference to a data element in a different specification (e.g. HL7 v2) or a general reference to a kind of data field, or a reference to a value set with an appropriately narrow definition.
     * @return \DSTU_TWO\FHIRElement\FHIRUri
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * A reference to a specific concept that holds a coded value. This can be an element in a FHIR resource, or a specific reference to a data element in a different specification (e.g. HL7 v2) or a general reference to a kind of data field, or a reference to a value set with an appropriately narrow definition.
     * @param \DSTU_TWO\FHIRElement\FHIRUri $element
     * @return $this
     */
    public function setElement($element)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @return \DSTU_TWO\FHIRElement\FHIRUri
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * An absolute URI that identifies the code system of the dependency code (if the source/dependency is a value set that crosses code systems).
     * @param \DSTU_TWO\FHIRElement\FHIRUri $codeSystem
     * @return $this
     */
    public function setCodeSystem($codeSystem)
    {
        $this->codeSystem = $codeSystem;
        return $this;
    }

    /**
     * Identity (code or path) or the element/item/ValueSet that the map depends on / refers to.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Identity (code or path) or the element/item/ValueSet that the map depends on / refers to.
     * @param \DSTU_TWO\FHIRElement\FHIRString $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->element) $json['element'] = $this->element->jsonSerialize();
        if (null !== $this->codeSystem) $json['codeSystem'] = $this->codeSystem->jsonSerialize();
        if (null !== $this->code) $json['code'] = $this->code->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConceptMapDependsOn xmlns="http://hl7.org/fhir"></ConceptMapDependsOn>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->element) $this->element->xmlSerialize(true, $sxe->addChild('element'));
        if (null !== $this->codeSystem) $this->codeSystem->xmlSerialize(true, $sxe->addChild('codeSystem'));
        if (null !== $this->code) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}