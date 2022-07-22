<?php
class Chatbot_model extends CI_Model
{
    public function getAllResponsesHuman()
    {
        $query = $this->db->get('human');
        return $query->result();
    }
    
    public function getOneChatbot($step)
    {
        $this->db->where('step', $step);
        $query = $this->db->get('chatbot');
        return $query->row();
    }
}
