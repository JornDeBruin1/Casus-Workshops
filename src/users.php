
    public function deleteKlant($id)
    {
        $query = "DELETE FROM `klant` WHERE `id`=$id;";
        $this->db->query($query);
    }
}